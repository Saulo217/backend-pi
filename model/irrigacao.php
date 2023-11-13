<?php
class Irrigacao
{
    private int $idIrrigacao;
    private bool $ligado;
    private float $quantidade;
    private $tempo;
    private $data;

    public function getIdIrrigacao()
    {
        return $this->idIrrigacao;
    }

    public function setIdIrrigacao($idIrrigacao)
    {
        return $this->idIrrigacao = $idIrrigacao;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        return $this->ligado = $ligado;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        return $this->quantidade = $quantidade;
    }

    public function getTempo()
    {
        return $this->tempo;
    }

    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        return $this->data = $data;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO irrigacao(ligado, quantidade, data, tempo) VALUES
        (:ligado, :quantidade, :data, :tempo)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":ligado", $this->getLigado());
            $sth->bindValue(":quantidade", $this->getQuantidade());
            $sth->bindValue(":data", $this->getData());
            $sth->bindValue(":tempo", $this->getTempo());
            $sth->execute();

            $this->read($pdo);

            echo "iluminacao cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM irrigacao";

        try {
            $sth = $pdo->prepare($sql);
            $sth->execute();

            $array = $sth->fetchAll(PDO::FETCH_ASSOC);
            echo "Listado com successo <br>";

            return $array;
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function delete(PDO $pdo)
    {
        $sql = "DELETE FROM irrigacao WHERE id_irrigacao = :idIrrigacao";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idIrrigacao", $this->getIdIrrigacao());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
