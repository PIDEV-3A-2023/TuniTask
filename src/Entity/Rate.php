<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use App\Entity\Offre;
use App\Entity\Commentaire;
use App\Repository\RateRepository;

#[ORM\Entity(repositoryClass: RateRepository::class)]
class Rate
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idrate=null;
    

    
    #[ORM\Column]
    private ?int $rate=null;

    #[ORM\ManyToOne(inversedBy: 'Rate')]
    #[ORM\JoinColumn(nullable: false)]
    private ?offre $offre = null;
    

    #[ORM\ManyToOne(inversedBy: 'Rate')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;
    

    public function getIdrate(): ?int
    {
        return $this->idrate;
    }

    public function getRate(): ?int
    {
        return $this->rate;
    }

    public function setRate(int $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): self
    {
        $this->offre = $offre;

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


}
