<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;


#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id=null;

    #[ORM\Column(length: 250)]
    private ?string $password= null;
    

    #[ORM\Column(length: 50)]
    private ?string $email= null;
    

    #[ORM\Column(length: 50)]
    private ?string $firstName= null;
    

    #[ORM\Column(length: 50)]
    private ?string $lastName= null;
    
   

    
    

   
    #[ORM\Column]
    private ?bool $statut= null;

    #[ORM\Column(length: 500)]
    private ?string $srcimage= null;
    

    #[ORM\Column]
    private ?bool $etat= null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

   

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getSrcimage(): ?string
    {
        return $this->srcimage;
    }

    public function setSrcimage(?string $srcimage): self
    {
        $this->srcimage = $srcimage;

        return $this;
    }

    public function isEtat(): ?bool
    {
        return $this->etat;
    }

    public function setEtat(?bool $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
    

}