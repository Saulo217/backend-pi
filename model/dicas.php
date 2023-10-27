<?php

class Dicas
{
    private int $idDicas;
    private String $titulo;
    private String $subtitulo;
    private String $corpo;
    private $imagensIcons;
    private String $nomeCientifico;
    

    public function getIdDicas()
    {
        return $this->idDicas;
    }

    public function setIdDicas($idDicas)
    {
        return $this->idDicas = $idDicas;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        return $this->titulo = $titulo;
    }

    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    public function setSubtitulo($subtitulo)
    {
        return $this->subtitulo = $subtitulo;
    }

    public function getCorpo()
    {
        return $this->corpo;
    }

    public function setCorpo($corpo)
    {
        return $this->corpo = $corpo;
    }

    public function getImagensIcons()
    {
        return $this->imagensIcons;
    }

    public function setImagensIcons($imagensIcons)
    {
        return $this->imagensIcons = $imagensIcons;
    }

    public function getNomeCientifico()
    {
        return $this->nomeCientifico;
    }

    public function setNomeCientifico($nomeCientifico)
    {
        return $this->nomeCientifico = $nomeCientifico;
    }





    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO Dicas(ID_Dicas, titulo, subtitulo, corpo, imagens_icons, nome_cientifico) VALUES
        (:idDicas, :titulo, :subtitulo, :corpo, :imagensIcons, :nomeCientifico)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idDicas", $this->getIdDicas());
            $sth->bindValue(":titulo", $this->getTitulo());
            $sth->bindValue(":subtitulo", $this->getSubtitulo());
            $sth->bindValue(":corpo", $this->getCorpo());
            $sth->bindValue(":imagensIcons", $this->getImagensIcons());
            $sth->bindValue(":nomeCientifico", $this->getNomeCientifico());
            $sth->execute();

            $this->read($pdo);

            echo "Dica Cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM Dicas";

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
        $sql = "DELETE FROM Dicas WHERE ID_Dicas = :idDicas";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idDicas", $this->getIdDicas());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}

?>