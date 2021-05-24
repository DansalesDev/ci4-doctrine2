<?php


namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * Class Entity
 * @package App\Models\Entities
 * @ORM\MappedSuperClass
 */
abstract class Entity {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $creationDate;

}