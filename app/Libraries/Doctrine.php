<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations

/**
 * Class Doctrine
 */
class Doctrine {

    static public $isDevMode = true;
    static private  $entitiesDir = array(APPPATH."App\Models\Entities");
    static private $proxyDir = APPPATH."App/Models/Proxies";
    static private $cache = null;
    static private $useSimpleAnnotationReader = false;

    public static function retrieveEntityManager(): EntityManager {
        $config = Setup::createAnnotationMetadataConfiguration(
        self::$entitiesDir, self::$isDevMode,
        self::$proxyDir, self::$cache,
        self::$useSimpleAnnotationReader);
        return EntityManager::create(self::getConnectionOptions(), $config);
}

    static function  getConnectionOptions():array{
        return  [
        'driver'    => $_ENV['database.default.DBDriver'],
        'host'      => $_ENV['database.default.hostname'],
        'user'      => $_ENV['database.default.username'],
        'password'  => $_ENV['database.default.password'],
        'dbname'    => $_ENV['database.default.database']
    ];
}




}