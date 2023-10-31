<?php
class Umidade
{
    private int $idUmidade;
    private bool $ligado;
    private float $umidade;
    private $dataCaptura;

    public function getIdUmidade()
    {
        return $this->idUmidade;
    }

    public function setIdUmidade($idUmidade)
    {
        return $this->idUmidade = $idUmidade;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        return $this->ligado = $ligado;
    }

    public function getUmidade()
    {
        return $this->umidade;
    }

    public function setUmidade($umidade)
    {
        return $this->umidade = $umidade;
    }

    public function getDataCaptura()
    {
        return $this->dataCaptura;
    }

    public function setDataCaptura($dataCaptura)
    {
        return $this->dataCaptura = $dataCaptura;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO umidade(ligado, umidade, data_captura) VALUES
        (:ligado, :umidade, :data_captura)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":ligado", $this->getLigado());
            $sth->bindValue(":umidade", $this->getUmidade());
            $sth->bindValue(":data_captura", $this->getDataCaptura());
            $sth->execute();

            $this->read($pdo);

            echo "umidade cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM umidade";

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
        $sql = "DELETE FROM umidade WHERE id_umidade = :idUmidade";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idUmidade", $this->getIdUmidade());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
