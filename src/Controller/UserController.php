<?php 

namespace Imperium\Controller;

use Imperium\Model\User;

class UserController extends Controller {
    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function listar(){
        $users=$this->repositorio->findAll();
        require 'c:\xampp\htdocs\Imperium_Vastare-\views\teste.php';
    }

    public function criar($paramentros){
        $user = new User($paramentros['user'], $paramentros['nome'], $paramentros['email'], $paramentros['senha']);

        $this->entitymanager->persist($user);
        $this->entitymanager->flush();
    }
}