<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Offre;
use App\Entity\Users;
use App\Repository\CommentaireRepository;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
#[Groups("Commentaires")]
    private ?int $idcommentaire=null;

    #[ORM\Column(length: 2000)]
    #[Groups("Commentaires")]
    private ?string $commentaire= null;

    
   

    #[ORM\ManyToOne(inversedBy: 'Commentaire')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups("Commentaires")]
    private ?Users $user = null;
    

    #[ORM\ManyToOne(targetEntity: 'App\Entity\Offre')]
    #[ORM\JoinColumn(referencedColumnName: "idoffre",name: "offre_id")]
    #[Groups("Commentaires")]
    private ?offre $offre = null;

    #[ORM\Column(nullable: false)]
    #[Groups("Commentaires")]
    private ?int $jaime = null;

    #[ORM\Column(nullable: false)]
    #[Groups("Commentaires")]
    private ?int $djaime = null;
    

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

    public function getJaime(): ?int
    {
        return $this->jaime;
    }

    public function setJaime(?int $jaime): self
    {
        $this->jaime = $jaime;

        return $this;
    }

    public function getDjaime(): ?int
    {
        return $this->djaime;
    }

    public function setDjaime(?int $djaime): self
    {
        $this->djaime = $djaime;

        return $this;
    }
    public function like(): self
{
    $this->jaime++;

    return $this;
}

public function dislike(): self
{
    $this->djaime++;

    return $this;
}


}
