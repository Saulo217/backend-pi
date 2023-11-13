<?php
class Iluminacao
{
    private int $idIluminacao;
    private bool $ligado;
    private float $iluminacao;
    private $dataCaptura;

    public function getIdIluminacao()
    {
        return $this->idIluminacao;
    }

    public function setIdIluminacao($idIluminacao)
    {
        return $this->idIluminacao = $idIluminacao;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        return $this->ligado = $ligado;
    }

    public function getIluminacao()
    {
        return $this->iluminacao;
    }

    public function setIluminacao($iluminacao)
    {
        return $this->iluminacao = $iluminacao;
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
        $sql = "INSERT INTO iluminacao(ligado, iluminacao, data_captura) VALUES
        (:ligado, :iluminacao, :data_captura)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":ligado", $this->getLigado());
            $sth->bindValue(":iluminacao", $this->getIluminacao());
            $sth->bindValue(":data_captura", $this->getDataCaptura());
            $sth->execute();

            $this->read($pdo);

            echo "iluminacao cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM iluminacao";

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

    public function readSingle(PDO $pdo)
    {
        $sql = "SELECT * FROM iluminacao WHERE id_iluminacao = :id_iluminacao";

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
        $sql = "DELETE FROM iluminacao WHERE id_iluminacao = :idIluminacao";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idIluminacao", $this->getIdIluminacao());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
