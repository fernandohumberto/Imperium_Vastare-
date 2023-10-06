<?php 

namespace Imperium\Model;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name:"user")]
class User {
    #[Id, Column(type: "integer"), GeneratedValue()]
    private int $id;

    #[Column(type: "string")]
    private string $user;

    #[Column(type: "string")]
    private string $nome;

    #[Column(type: "string")]
    private string $senha;

    #[Column(type: "string")]
    private string $email;

    public function __construct($user, $nome, $email, $senha)
    {
        $this->user=$user;
        $this->nome=$nome;
        $this->email=$email;
        $this->senha=$senha;
    }

    /**
     * Get the value of user
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser(string $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of senha
     */
    public function getSenha(): string
    {
        return $this->senha;
    }

    /**
     * Set the value of senha
     */
    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
}