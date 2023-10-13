<?php 

namespace Imperium\Controller;

use Doctrine\ORM\EntityManager;
use Imperium\Provider\EntityManagerCreator;

class Controller {
    protected EntityManager $entitymanager;
    protected $repositorio;

    public function __construct(string $nomedaentidade)
    {
        $this->entitymanager=EntityManagerCreator::createEntityManager();
        $this->repositorio=$this->entitymanager->getRepository($nomedaentidade);
    }

    public function view(string $url) : void 
    {
        require_once __DIR__."/../../views/".$url.".php";    
    }
}