<?php
class NivelAgua
{
    private int $idNivelAgua;
    private bool $ligado;
    private float $nivelAgua;
    private $dataCaptura;

    public function getIdNivelAgua()
    {
        return $this->idNivelAgua;
    }

    public function setIdNivelAgua($idNivelAgua)
    {
        return $this->idNivelAgua = $idNivelAgua;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        return $this->ligado = $ligado;
    }

    public function getNivelAgua()
    {
        return $this->nivelAgua;
    }

    public function setNivelAgua($nivelAgua)
    {
        return $this->nivelAgua = $nivelAgua;
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
        $sql = "INSERT INTO nivel_agua(ligado, nivel_agua, data_captura) VALUES
        (:ligado, :nivel_agua, :data_captura)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":ligado", $this->getLigado());
            $sth->bindValue(":nivel_agua", $this->getNivelAgua());
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
        $sql = "SELECT * FROM nivel_agua";

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
        $sql = "DELETE FROM nivel_agua WHERE id_nivel_agua = :idNivelAgua";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idNivelAgua", $this->getIdNivelAgua());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
