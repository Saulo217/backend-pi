<?php

class Bugs
{
    private int $id_bug;
    private String $descricao;
    private $data_contato;
    private $data_correcao;

    public function getId_bug()
    {
        return $this->id_bug;
    }

    public function setID_bug($id_bug)
    {
        return $this->id_bug = $id_bug;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        return $this->descricao = $descricao;
    }

    public function getData_contato()
    {
        return $this->data_contato;
    }

    public function setData_contato($data_contato)
    {
        return $this->data_contato = $data_contato;
    }

    public function getData_correcao()
    {
        return $this->data_correcao;
    }

    public function setData_correcao($data_correcao)
    {
        return $this->data_correcao = $data_correcao;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO Bugs( descricao, data_contato, data_correcao) VALUES
        (:descricao, :data_contato, :data_correcao)";

        try {
            $sth = $pdo->prepare($sql);

            $sth->bindValue(":descricao", $this->getDescricao());
            $sth->bindValue(":data_contato", $this->getData_contato());
            $sth->bindValue(":data_correcao", $this->getData_correcao());
            $sth->execute();

            $this->read($pdo);

            echo "Bug Cadastrado <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM Bugs";

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
        $sql = "DELETE FROM Bugs WHERE ID_Bug = :id_bug";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":id_bug", $this->getId_bug());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
