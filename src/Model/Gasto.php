<?php

namespace Imperium\Model;

use Doctrine\ORM\Mapping\{
    Column,
    Entity,
    GeneratedValue,
    Id,
    JoinColumn,
    ManyToOne,
    Table
};

#[Entity, Table(name: "meusgastos")]
class Gasto
{
    #[Id, Column("integer"), GeneratedValue]
    private int $id;

    #[Column(type: "string")]
    private string $despesa;

    #[Column(type: "double")]
    private float $valor;

    #[ManyToOne(targetEntity: "User", inversedBy: "users"), JoinColumn(name: "user_id", referencedColumnName: "id")]
    private User $usuario;

    public function __construct(string $despesa, float $valor, User $usuario)
    {
        $this->despesa = $despesa;
        $this->valor = $valor;
        $this->usuario = $usuario;
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
     * Get the value of despesa
     */ 
    public function getDespesa()
    {
        return $this->despesa;
    }

    /**
     * Set the value of despesa
     *
     * @return  self
     */ 
    public function setDespesa($despesa)
    {
        $this->despesa = $despesa;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

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
}