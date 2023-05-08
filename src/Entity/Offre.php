<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use App\Entity\Users;
use App\Repository\OffreRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("offres")]
    private ?int $idoffre=null;


    #[ORM\Column(length: 500)]
    #[Groups("offres")]
    private ?string $description= null;
    

    #[ORM\Column(length: 50)]
    #[Groups("offres")]
    private ?string $titre= null;
    
    #[ORM\Column(type:"float")]
    #[Gedmo\Rating]
    #[Groups("offres")]
    private $rating;
    
    #[ORM\Column]
    #[Groups("offres")]
    private ?float $salaireh= null;

    #[ORM\ManyToOne(inversedBy: 'Offre')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups("offres")]
    private ?Users $user = null;

    #[ORM\Column]
    #[Groups("offres")]
    private ?int $count = 1;

    #[ORM\Column]
    #[Groups("offres")]
    private ?float $sumr = null;

    public function getIdoffre(): ?int
    {
        return $this->idoffre;
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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSalaireh(): ?float
    {
        return $this->salaireh;
    }

    public function setSalaireh(float $salaireh): self
    {
        $this->salaireh = $salaireh;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    
    public function getRating(): float
    {
        return $this->rating;
    }

    public function getSumr(): ?float
    {
        return $this->sumr;
    }

    public function setSumr(float $sumr): self
    {
        $this->sumr = $sumr;

        return $this;
    }
    

}
