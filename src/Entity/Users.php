<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;
<<<<<<< HEAD
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
=======


#[ORM\Entity(repositoryClass: UsersRepository::class)]
>>>>>>> offre
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
<<<<<<< HEAD
    #[Groups("user")]
    private ?int $id = null;
    #[ORM\Column(length: 255)]

    #[Groups("user")]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    
    #[Groups("user")]
    private ?string $email = null;

 #[ORM\Column(length: 50)]
    private $firstName;

  #[ORM\Column(length: 50)]
    private $lastName;
#[Assert\NotBlank]
#[Assert\Date]
#[ORM\Column(name: "date_of_birth", type: "date", nullable: false)]
    private \DateTime $dateOfBirth;

  #[ORM\Column(name: "created_at", type: "datetime", nullable: false, options: ["default" => "CURRENT_TIMESTAMP"])]
#[Assert\NotBlank]
private \DateTime $createdAt;

   #[ORM\Column]
    private $statut;

   #[ORM\Column(length: 500)]
    private $srcimage;

 #[ORM\Column]
    private $etat;
=======
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
    
>>>>>>> offre

    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
=======
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

>>>>>>> offre
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

<<<<<<< HEAD
    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTimeInterface $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(): self
    {
      $datetime = \DateTime::createFromFormat('U', time());
$date = $datetime->format('Y-m-d');
$this->createdAt = \DateTime::createFromFormat('Y-m-d', $date);

        return $this;
    }
=======
   
>>>>>>> offre

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
<<<<<<< HEAD

=======
    
>>>>>>> offre

}
