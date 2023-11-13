<?php

class Interacao
{
    private int $idInteracao;
    private int $idBug;
    private String $emailUsuario;

    public function getIdInteracao()
    {
        return $this->idInteracao;
    }

    public function setIdInteracao($idInteracao)
    {
        return $this->idInteracao = $idInteracao;
    }

    public function getIdBug()
    {
        return $this->idBug;
    }

    public function setIdBug($idBug)
    {
        return $this->idBug = $idBug;
    }

    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    public function setEmailUsuario($emailUsuario)
    {
        return $this->emailUsuario = $emailUsuario;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO interacao(id_interacao, id_bug, email_usuario) VALUES
        (:idInteracao, :idBug, :emailUsuario)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idInteracao", $this->getIdInteracao());
            $sth->bindValue(":idBug", $this->getIdBug());
            $sth->bindValue(":emailUsuario", $this->getEmailUsuario());
            $sth->execute();

            $this->read($pdo);

            echo "Interação Cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM interacao";

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
        $sql = "DELETE FROM interacao WHERE id_interacao = :idInteracao";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":idInteracao", $this->getIdInteracao());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
