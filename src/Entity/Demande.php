<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DemandeRepository;
use App\Entity\Users;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DemandeRepository::class)]
class Demande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("demandes")]
    private ?int $id = null;

   
    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message:"Titre is required")]
    #[Groups("demandes")]
    #[Groups("demandes")]
    private ?string $titre= null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Description is required")]
    private ?string $description= null;


    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message:"Salaire is required")]
   #[Assert\Positive(message:"Le salaire '{{ value }}' doit être positif ")]
   #[Groups("demandes")]
   private ?float $salaire= null;


    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message:"Delai is required")]
    #[Groups("demandes")]
    private ?string $delai= null;

   
    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message:"Langage is required")]
    #[Groups("demandes")]
    private ?string $langage= null;

   

    #[ORM\Column]
    #[Groups("demandes")]
    private ?bool $etat= null;

   
    #[ORM\ManyToOne(inversedBy: 'Demande')]
    #[ORM\JoinColumn(nullable: false , name:"id_client" )]
    private ?Users $idClient = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

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

    public function getSalaire(): ?float
    {
        return $this->salaire;
    }

    public function setSalaire(float $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function getDelai(): ?string
    {
        return $this->delai;
    }

    public function setDelai(string $delai): self
    {
        $this->delai = $delai;

        return $this;
    }

    public function getLangage(): ?string
    {
        return $this->langage;
    }

    public function setLangage(string $langage): self
    {
        $this->langage = $langage;

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

    public function getIdClient(): ?Users
    {
        return $this->idClient;
    }

    public function setIdClient(?Users $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function __toString()
    {
        return $this->langage; // assuming that the Station entity has a 'name' property
    }

}
