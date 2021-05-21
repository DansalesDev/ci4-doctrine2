<?php


namespace App\Models\Entities;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\MappedSuperClass
 */
abstract class User  extends  Entity {


    /**
     * @var string $name
     * @ORM\Column(name="name", type="string", length=255, nullable=false);
     */
    protected $name;
    /**
     * @var string $username
     * @ORM\Column(name="usernamename", type="string", length=255, nullable=false);
     */
    protected $username;
    /**
     * @var string $password
     * @ORM\Column(name="password", type="string", length=255, nullable=false);
     */
    protected $password;
    /**
     * @var int $cpf
     * @ORM\Column(name="cpf", type="integer", nullable=false);
     */
    protected $cpf;
    /**
     * @var int $rg
     * @ORM\Column(name="rg", type="integer",  nullable=true);
     */
    protected $rg;
    /**
     * @var string $email
     * @ORM\Column(name="email", type="string", length=255, nullable=false);
     */
    protected $email;
    /**
     * @var string $status
     * @ORM\Column(name="status", type="string", length=255, columnDefinition="ENUM('activated', 'pending', 'veryfied', 'blocked')"), nullable=false);
     */
    protected $status;
    /**
     * @var boolean $
     * @ORM\Column(name="newsLatter", type="boolean", nullable=true);
     */
    protected $newsLatter;

}