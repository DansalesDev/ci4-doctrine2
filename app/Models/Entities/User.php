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
     * @ORM\Column(name="username", type="string", length=255, nullable=false);
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
     * @var string $gender
     * @ORM\Column(name="gender", type="string", length=255, columnDefinition="ENUM('male', 'famale', 'other')"), nullable=false);
     */
    protected $gender;
    /**
     * @var boolean $newsLatter
     * @ORM\Column(name="newsLatter", type="boolean", nullable=true);
     */
    protected $newsLatter;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    /**
     * @return int
     */
    public function getCpf(): int
    {
        return $this->cpf;
    }
    /**
     * @param int $cpf
     */
    public function setCpf(int $cpf): void
    {
        $this->cpf = $cpf;
    }
    /**
     * @return int
     */
    public function getRg(): int
    {
        return $this->rg;
    }
    /**
     * @param int $rg
     */
    public function setRg(int $rg): void
    {
        $this->rg = $rg;
    }
    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }
    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }
    /**
     * @return bool
     */
    public function isNewsLatter(): bool
    {
        return $this->newsLatter;
    }
    /**
     * @param bool $newsLatter
     */
    public function setNewsLatter(bool $newsLatter): void
    {
        $this->newsLatter = $newsLatter;
    }


}