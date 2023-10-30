<?php

class Usuario
{
    private String $email;
    private String $nome;
    private $data_nascimento;
    private $foto;
    private String $senha;
    private String $usuario;
    private String $cargo;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        return $this->nome = $nome;
    }

    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    public function setData_nascimento($data_nascimento)
    {
        return $this->data_nascimento = $data_nascimento;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        return $this->foto = $foto;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        return $this->senha = $senha;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        return $this->usuario = $usuario;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        return $this->cargo = $cargo;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO Usuario(email, nome, data_nascimento, foto, senha, usuario, cargo) VALUES
        (:email, :nome, :data_nascimento, :foto, :senha, :usuario, :cargo)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":email", $this->getEmail());
            $sth->bindValue(":nome", $this->getNome());
            $sth->bindValue(":data_nascimento", $this->getData_nascimento());
            $sth->bindValue(":foto", $this->getFoto());
            $sth->bindValue(":senha", $this->getSenha());
            $sth->bindValue(":usuario", $this->getUsuario());
            $sth->bindValue(":cargo", $this->getCargo());
            $sth->execute();

            echo "Usuario Cadastrado <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function readSingleUser(PDO $pdo)
    {
        $sql = "SELECT * FROM Usuario WHERE email = :email";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":email", $this->getEmail());
            $sth->execute();

            return $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function readUser(PDO $pdo)
    {
        $sql = "SELECT * FROM Usuario";

        try {
            $sth = $pdo->prepare($sql);
            $sth->execute();

            return $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function delete(PDO $pdo)
    {
        $sql = "DELETE FROM Usuario WHERE email = :email";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":email", $this->getEmail());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
