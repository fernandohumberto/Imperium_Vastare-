<?php 

namespace Imperium\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\{
    Column,
    Entity,
    GeneratedValue,
    Id,
    OneToMany,
    Table
};

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

    #[OneToMany(targetEntity: "Gasto", mappedBy:"users")]
    private ArrayCollection $gastos;

    #[OneToMany(targetEntity: "Suporte", mappedBy:"suporte")]
    private ArrayCollection $suportes;

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

    /**
     * Get the value of gastos
     */ 
    public function getGastos() : ArrayCollection
    {
        return $this->gastos;
    }

    /**
     * Set the value of gastos
     *
     * @return  self
     */ 
    public function setGastos($gastos)
    {
        $this->gastos = $gastos;

        return $this;
    }

    /**
     * Adiciona um gasto à coleção
     * @param Gastos $gasto
     */
    public function addGasto(Gasto $gasto) : void
    {
        $this->gastos->add($gasto);
    }

    /**v
     * Remove um gasto da coleção a partir de ima chave
     * @param int $id
     */
    public function removeGasto(int $id) : void
    {
        $this->gastos->remove($id);    
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
     * Get the value of suportes
     */ 
    public function getSuportes()
    {
        return $this->suportes;
    }

    /**
     * Set the value of suportes
     *
     * @return  self
     */ 
    public function setSuportes($suportes)
    {
        $this->suportes = $suportes;

        return $this;
    }

    public function addSuporte(Suporte $suporte) : void 
    {
        $this->suportes->add($suporte);
    }

    public function removeSuporte(int $id) : void
    {
        $this->suportes->remove($id);
    }
}