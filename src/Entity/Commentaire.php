<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Offre;
use App\Entity\Users;
use App\Repository\CommentaireRepository;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idcommentaire=null;

    #[ORM\Column(length: 2000)]
    private ?string $commentaire= null;

    #[ORM\ManyToOne(inversedBy: 'Commentaire')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $user = null;
    

    #[ORM\ManyToOne(inversedBy: 'Commentaire')]
    #[ORM\JoinColumn(nullable: false)]
    private ?offre $offre = null;
    

    public function getIdcommentaire(): ?int
    {
        return $this->idcommentaire;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

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

    public function getOffre(): ?Offre
    {
        return $this->offre;
    }

    public function setOffre(?Offre $offre): self
    {
        $this->offre = $offre;

        return $this;
    }


}
