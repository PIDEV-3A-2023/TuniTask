<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsersRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
 /**
     * @var string
     *
     * 
     * @Assert\NotBlank(message="Password  cannot be blank")
     * @Assert\Length(min="6", minMessage="Quiz description cannot be longer than {{ limit }} characters")
     */
    private ?string $password = null;

    #[ORM\Column(length: 255)]
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

    public function getId(): ?int
    {
        return $this->id;
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
