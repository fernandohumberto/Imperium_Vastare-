<?php

namespace Imperium\Provider;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{

    public static function createEntityManager(): EntityManager
    {
        $paths = ['/path/to/entity-files'];
        $isDevMode = false;

        $dbParams = [
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '',
            'dbname'   => 'imperium',
        ];

        $config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
        $connection = DriverManager::getConnection($dbParams, $config);

        return  new EntityManager($connection, $config);
    }
}
