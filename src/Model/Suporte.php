<?php

namespace Imperium\Model;

use Doctrine\ORM\Mapping\{
    Entity,
    Table,
    Column,
    Id,
    GeneratedValue,
    ManyToOne
};

#[Entity, Table(name: "suporte")]
class Suporte
{
    #[Id, Column(type: "integer"), GeneratedValue]
    private int $id;

    #[Column(type: "string")]
    private string $nome;

    #[Column(type: "string")]
    private string $email;

    #[Column(type: "string")]
    private string $message;

    #[ManyToOne(targetEntity:"User", inversedBy: "users")]
    private User $usuario;

    #[Column(type: "integer")]
    private int $status;

    #[Column(type: "boolean")]
    private bool $ativo;

    public function __construct(
        int $id, 
        string $nome, 
        string $email, 
        string $message, 
        User $usuario, 
        int $status, 
        bool $ativo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->message = $message;
        $this->usuario = $usuario;
        $this->status = $status;
        $this->ativo = $ativo;
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

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */ 
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of ativo
     */ 
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set the value of ativo
     *
     * @return  self
     */ 
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}