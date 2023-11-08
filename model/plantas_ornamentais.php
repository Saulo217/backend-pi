<?php

class PlantasOrnamentais
{
    private String $nome_cientifico;
    private String $nome_popular;
    private $data_inicio_florescimento;
    private $data_fim_florescimento;
    private int $idade_minima_florescimento;
    private float $quantidade_agua_regacao;
    private float $temperatura_ideal;
    private float $umidade_ideal;
    private float $iluminacao_ideal;
    private $foto_planta;

    public function getNome_cientifico()
    {
        return $this->nome_cientifico;
    }

    public function setNome_cientifico($nome_cientifico)
    {
        return $this->nome_cientifico = $nome_cientifico;
    }

    public function getNome_popular()
    {
        return $this->nome_popular;
    }

    public function setNomePopular($nome_popular)
    {
        return $this->nome_popular = $nome_popular;
    }

    public function getData_inicio_florescimento()
    {
        return $this->data_inicio_florescimento;
    }

    public function setData_inicio_florescimento($data_inicio_florescimento)
    {
        return $this->data_inicio_florescimento = $data_inicio_florescimento;
    }

    public function getData_fim_florescimento()
    {
        return $this->data_fim_florescimento;
    }

    public function setData_fim_florescimento($data_fim_florescimento)
    {
        $this->data_fim_florescimento = $data_fim_florescimento;
    }

    public function getIdade_minima_florescimento()
    {
        return $this->idade_minima_florescimento;
    }

    public function setIdade_minima_florescimento($idade_minima_florescimento)
    {
        return $this->idade_minima_florescimento = $idade_minima_florescimento;
    }

    public function getQuantidade_agua_regacao()
    {
        return $this->quantidade_agua_regacao;
    }

    public function setQuantidade_agua_regacao($quantidade_agua_regacao)
    {
        return $this->quantidade_agua_regacao = $quantidade_agua_regacao;
    }

    public function getTemperatura_ideal()
    {
        return $this->temperatura_ideal;
    }

    public function setTemperatura_ideal($temperatura_ideal)
    {
        return $this->temperatura_ideal = $temperatura_ideal;
    }

    public function getUmidade_ideal()
    {
        return $this->umidade_ideal;
    }

    public function setUmidade_ideal($umidade_ideal)
    {
        return $this->umidade_ideal = $umidade_ideal;
    }

    public function getIluminacao_ideal()
    {
        return $this->iluminacao_ideal;
    }

    public function setIluminacao_ideal($iluminacao_ideal)
    {
        return $this->iluminacao_ideal = $iluminacao_ideal;
    }

    public function getFoto_planta()
    {
        return $this->foto_planta;
    }

    public function setFoto_planta($foto_planta)
    {
        return $this->foto_planta = $foto_planta;
    }

    public function create(PDO $pdo)
    {
        $sql = "INSERT INTO  plantas_ornamentais(nome_cientifico, nome_popular, data_inicio_florescimento, data_fim_florescimento, idade_minima_florescimento, quantidade_agua_regacao, temperatura_ideal, umidade_ideal, iluminacao_ideal, foto_planta) VALUES
        (:nome_cientifico, :nome_popular, :data_inicio_florescimento, :data_fim_florescimento, :idade_minima_florescimento, :quantidade_agua_regacao,
         :temperatura_ideal, :umidade_ideal, :iluminação_ideal, :foto_planta)";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":nome_cientifico", $this->getNome_cientifico());
            $sth->bindValue(":nome_popular", $this->getNome_popular());
            $sth->bindValue(":data_inicio_florescimento", $this->getData_inicio_florescimento());
            $sth->bindValue(":data_fim_florescimento", $this->getData_fim_florescimento());
            $sth->bindValue(":idade_minima_florescimento", $this->getIdade_minima_florescimento());
            $sth->bindValue(":quantidade_agua_regacao", $this->getQuantidade_agua_regacao());
            $sth->bindValue(":temperatura_ideal", $this->getTemperatura_ideal());
            $sth->bindValue(":umidade_ideal", $this->getUmidade_ideal());
            $sth->bindValue(":iluminacao_ideal", $this->getIluminacao_ideal());
            $sth->bindValue(":foto_planta", $this->getIluminacao_ideal());
            $sth->execute();

            $this->read($pdo);

            echo "Planta Ornamental Cadastrada <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function read(PDO $pdo)
    {
        $sql = "SELECT * FROM plantas_ornamentais WHERE nome_cientifico = :nome_cientifico";

        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":nome_cientifico", $this->getNome_cientifico());
            $sth->execute();

            return $sth->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function readMany(PDO $pdo)
    {
        $sql = "SELECT * FROM plantas_ornamentais";

        try {
            $sth = $pdo->prepare($sql);
            $sth->execute();

            return $sth->fetchAll(PDO::FETCH_BOTH);
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }

    public function delete(PDO $pdo)
    {
        $sql = "DELETE FROM PlantasOrnamentais WHERE nome_popular = :nome_popular";
        try {
            $sth = $pdo->prepare($sql);
            $sth->bindValue(":nome_popular", $this->getNome_popular());
            $sth->execute();
            echo "Deletado com successo <br>";
        } catch (PDOException $error) {
            echo "Error: " . $error->getMessage();
        }
    }
}
