<?php
class Historico {
    private int $idHistorico;
    private int $idIluminacao;
    private int $idNivelAgua;
    private int $idTemperatura;
    private int $idUmidade;
    private int $idPlanta;

    public function getIdHistorico() {
        return $this->idHistorico;
    }
    
    public function setIdHistorico($idHistorico) {
        $this->idHistorico = $idHistorico;
    }

    public function getIdIluminacao() {
        return $this->idIluminacao;
    }
    
    public function setIdIluminacao($idIluminacao) {
        $this->idIluminacao = $idIluminacao;
    }

    public function getIdNivelAgua() {
        return $this->idNivelAgua;
    }
    
    public function setIdNivelAgua($idNivelAgua) {
        $this->idNivelAgua = $idNivelAgua;
    }

    public function getIdTemperatura() {
        return $this->idTemperatura;
    }
    
    public function setIdTemperatura($idTemperatura) {
        $this->idTemperatura = $idTemperatura;
    }

    public function getIdUmidade() {
        return $this->idUmidade;
    }
    
    public function setIdUmidade($idUmidade) {
        $this->idUmidade = $idUmidade;
    }

    public function getIdPlanta() {
        return $this->idPlanta;
    }
    
    public function setIdPlanta($idPlanta) {
        $this->idPlanta = $idPlanta;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO Historico(ID_Iluminacao, ID_Nivel_Agua, ID_Temperatura, ID_Umidade, ID_Planta) VALUES
        (:idIluminacao, :idNivelAgua, :idTemperatura, :idUmidade, :idPlanta)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idIluminacao", $this->getIdIluminacao());
            $sth->bindValue(":idNivelAgua", $this->getIdNivelAgua());
            $sth->bindValue(":idTemperatura", $this->getIdTemperatura());
            $sth->bindValue(":idUmidade", $this->getIdUmidade());
            $sth->bindValue(":idPlanta", $this->getIdPlanta());
            $sth->execute();

            $this->read($pdo);

            echo "iluminacao cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM Historico";

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
        $sql = "DELETE FROM Historico WHERE ID_Historico = :idHistorico";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idHistorico", $this->getIdHistorico());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
?>