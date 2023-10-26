<?php

class MinhasPlantas
{
    private int $id_planta;
    private $data_nascimento;
    private String $apelido;
    private String $cor;
    private String $email_usuario;
    private String $nome_cientifico;

    public function getId_planta()
    {
        return $this->id_planta;
    }

    public function setId_planta($id_planta)
    {
        return $this->id_planta = $id_planta;
    }

    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento)
    {
        return $this->data_nascimento = $data_nascimento;
    }

    public function getApelido()
    {
        return $this->apelido;
    }

    public function setApelido($apelido)
    {
        return $this->apelido = $apelido;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        return $this->cor = $cor;
    }

    public function getEmail_usuario()
    {
        return $this->email_usuario;
    }

    public function setEmail_usuario($email_usuario)
    {
        return $this->email_usuario = $email_usuario;
    }

    public function getNome_cientifico()
    {
        return $this->nome_cientifico;
    }

    public function setNome_cientifico($nome_cientifico)
    {
        return $this->nome_cientifico = $nome_cientifico;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO MinahsPlantas(ID_Planta, Data_Nascimento, Apelido, Cor, email_usuario, nome_cientifico) VALUES
        (:id_planta, :data_nascimento, :apelido, :cor, :email_usuario, :nome_cientifico)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":id_planta", $this->getId_planta());
            $sth->bindValue(":data_nascimento", $this->getData_nascimento());
            $sth->bindValue(":apelido", $this->getApelido());
            $sth->bindValue(":cor", $this->getCor());
            $sth->bindValue(":email_usuario", $this->getEmail_usuario());
            $sth->bindValue(":nome_cientifico", $this->getNome_cientifico());
            $sth->execute();

            $this->read($pdo);

            echo "Minhas Plantas Cadastradas <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM MinhasPlantas";

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
        $sql = "DELETE FROM MinhasPlantas WHERE ID_Planta = :id_planta";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":id_planta", $this->getId_planta());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}

?>