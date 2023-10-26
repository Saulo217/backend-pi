<?php
class Temperatura
{
    private int $idTemperatura;
    private bool $ligado;
    private float $temperatura;
    private $dataCaptura;

    public function getIdTemperatura()
    {
        return $this->idTemperatura;
    }

    public function setIdTemperatura($idTemperatura)
    {
        return $this->idTemperatura = $idTemperatura;
    }

    public function getLigado()
    {
        return $this->ligado;
    }

    public function setLigado($ligado)
    {
        return $this->ligado = $ligado;
    }

    public function getTemperatura()
    {
        return $this->temperatura;
    }

    public function setTemperatura($temperatura)
    {
        return $this->temperatura = $temperatura;
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
        $sql = "INSERT INTO Temperatura(ligado, temperatura, data_captura) VALUES
        (:ligado, :temperatura, :data_captura)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":ligado", $this->getLigado());
            $sth->bindValue(":temperatura", $this->getTemperatura());
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
        $sql = "SELECT * FROM Temperatura";

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
        $sql = "DELETE FROM Temperatura WHERE ID_Temperatura = :idTemperatura";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idTemperatura", $this->getIdTemperatura());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
