<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// Create a simple "default" Doctrine ORM configuration for Annotations

/**
 * Class Doctrine
 */
class Doctrine {
public  $isDevMode = true;
private $entitiesDir = array(APPPATH."App\Models\Entities");
private $proxyDir = APPPATH."App/Models/Proxies";
private $cache = null;
private $useSimpleAnnotationReader = false;
protected $conn = null;
static $entityManager = null;

public function __construct() {
    $config = Setup::createAnnotationMetadataConfiguration($this->entitiesDir,
        $this->isDevMode, $this->proxyDir, $this->cache, $this->useSimpleAnnotationReader);
        $this->getConnectionOpitions();
    // obtaining the entity manager
    self::$entityManager = EntityManager::create($this->conn, $config);
}

private function  getConnectionOpitions(){
    $connectionConfig = array(
        'driver'    => $_ENV['database.default.DBDriver'],
        'host'      => $_ENV['database.default.hostname'],
        'user'      => $_ENV['database.default.username'],
        'password'  => $_ENV['database.default.password'],
        'dbname'    => $_ENV['database.default.database']
    );
    $this->conn = $connectionConfig;
}




}