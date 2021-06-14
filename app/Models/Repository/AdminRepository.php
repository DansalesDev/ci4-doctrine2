<?php


namespace App\Models\Repository;

use Doctrine;

class AdminRepository  extends UserRepository {
    public static function findAll() {
        self::$em = Doctrine::retrieveEntityManager();
        return self::$em->getRepository('App\Models\Entities\Admin')->findAll();
    }

}