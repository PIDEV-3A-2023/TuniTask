<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator\ContainsBadWords; 
use App\Entity\Users;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(type: "integer", nullable: false)]
     #[Groups("Reclamations")]
    private $id;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank()]
    #[Groups("Reclamations")]
    private $nom;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank()]
    #[Groups("Reclamations")]
    private $prenom;

    #[ORM\Column(type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank()]
    #[Assert\Email()]
#[Groups("Reclamations")]
    private $email;

    #[ORM\Column(type: "string", length: 255, nullable: false)]
    #[Assert\NotBlank()]
    #[ContainsBadWords]
    #[Groups("Reclamations")]
    private $description;

    #[ORM\Column(type: "string", nullable: false)]
    #[Groups("Reclamations")]
    private $etat;

    #[ORM\ManyToOne(targetEntity: "Users")]
    #[ORM\JoinColumn(name: "id_user", referencedColumnName: "id")]
    #[Groups("Reclamations")]
    private  $idUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdUser(): ?Users
    {
        return $this->idUser;
    }

    public function setIdUser(?Users $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->prenom . ' ' . $this->nom . ' | ' . $this->description;
    }
}
