<?php

namespace Classes;

class Cadastro
{
    private $id;
    private $nome;
    private $telefone;
    private $email;

    public function __construct(string $nome = '', string $telefone = '', string $email = '')
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function inserir()
    {
        $connection = $this->getConnection();

        $query = $connection->prepare('INSERT INTO cadastro (nome, telefone, email) VALUES (:nome, :telefone, :email)');
        $query->bindParam(':nome', $this->getNome());
        $query->bindParam(':telefone', $this->getTelefone());
        $query->bindParam(':email', $this->getEmail());
        $query->execute();

        $connection = null;
    }

    public function exibir(): array
    {
        $connection = $this->getConnection();

        $query = $connection->prepare('SELECT * FROM cadastro');
        $query->execute();
        $list = $query->fetchAll(\PDO::FETCH_ASSOC);

        $connection = null;

        return $list;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of telefone
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    private function getConnection(): \PDO
    {
        return new \PDO('mysql:host=127.0.0.1;dbname=sistema', 'root', 'root');
    }
}
