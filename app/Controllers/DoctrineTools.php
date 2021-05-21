<?php


namespace App\Controllers;

use Doctrine;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\SchemaTool;
use Exception;

class DoctrineTools extends BaseController {

    /**
     * Dctrine2 Entity Manager
     * @var EntityManager $em
     */
    protected $em;

    /**
     * @var  SchemaTool $schemaTool
     */
    protected $schemaTool;

    /**
     * DoctrineTools constructor.
     */
    public function __construct() {
        $ci = new Doctrine();
        $this->em = $ci::$entityManager;
        $this->schemaTool = new SchemaTool($this->em);
    }

    public function index() {
//        die(json_encode($_POST));
        if(!$_POST) {
            die(view('layout/doctrine'));
        } else {
            try {
                $classes =  $this->getEntitesList();
                $this->schemaTool->updateSchema($classes);
                die(view('layout/doctrine', array('success' => true)));
            } catch (Exception $ex){
                 throw new Exception($ex->getMessage());
            }
        }

    }

    private function getEntitesList(): array{
        $classes = [
            $this->em->getClassMetadata('App\Models\Entities\Entity'),
            $this->em->getClassMetadata('App\Models\Entities\User'),
            $this->em->getClassMetadata('App\Models\Entities\Admin'),
        ];
        return $classes;

    }

}