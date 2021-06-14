<?php


namespace App\Models\Repository;

use App\Models\Entities\Entity;
use Doctrine;


abstract class Repository  {

    protected static $entityName ;

    protected static $em;

    static function save(Entity $entity){
        self::$em = Doctrine::retrieveEntityManager();
        self::$em->persist($entity);
        self::$em->flush();
    }

    protected static abstract function findAll();





}