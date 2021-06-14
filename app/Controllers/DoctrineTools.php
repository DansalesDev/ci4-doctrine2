<?php


namespace App\Controllers;

use Doctrine;

use Doctrine\ORM\EntityManager,
    Doctrine\ORM\Tools\SchemaTool;

use Doctrine\DBAL\Connection,
    Doctrine\DBAL\Exception as DoctrineException;

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
        $this->em = Doctrine::retrieveEntityManager();
        $this->schemaTool = new SchemaTool($this->em);
        $connection = $this->em->getConnection();
        $this->registerCustomDatabaseTypes($connection);

    }

    public function index() {
        if(!$_POST) {
            die(view('layout/doctrine'));
        } else {
            try {
                $classes =  $this->getEntitiesList();
                $this->schemaTool->updateSchema($classes);
                die(view('layout/doctrine', array('success' => true)));
            } catch (Exception $ex){
                 throw new Exception($ex->getMessage());
            }
        }

    }

    private function getEntitiesList(): array{
        return  [
            $this->em->getClassMetadata('App\Models\Entities\Admin'),
        ];

    }
    private function registerCustomDatabaseTypes(Connection $connection) {
        try {
            $connection->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');
        } catch (DoctrineException $ex) {
            throw DoctrineException::unknownColumnType('');
        }
    }

}