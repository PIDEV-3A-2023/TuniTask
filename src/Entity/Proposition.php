<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PropositionRepository;
use App\Entity\Users;
use App\Entity\Demande;

#[ORM\Entity(repositoryClass: PropositionRepository::class)]
class Proposition
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id=null;

    #[ORM\ManyToOne(inversedBy: 'Proposition')]
    #[ORM\JoinColumn(nullable: false , name:"id_freelancer" )] 
    private ?Users $idFreelancer = null;

    
    #[ORM\ManyToOne(inversedBy: 'Proposition')]
    #[ORM\JoinColumn(nullable: false , name:"id_demande" )] 
    private ?Demande $idDemande = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFreelancer(): ?Users
    {
        return $this->idFreelancer;
    }

    public function setIdFreelancer(?Users $idFreelancer): self
    {
        $this->idFreelancer = $idFreelancer;

        return $this;
    }

    public function getIdDemande(): ?Demande
    {
        return $this->idDemande;
    }

    public function setIdDemande(?Demande $idDemande): self
    {
        $this->idDemande = $idDemande;

        return $this;
    }


}
