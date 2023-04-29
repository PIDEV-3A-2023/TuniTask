<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]

class Reponserec
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "reponse_id", type: "integer", nullable: false)]
    private $reponseId;

    #[ORM\Column(name: "nomAgent", type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank]
    private $nomagent;

    #[ORM\Column(name: "prenomAgent", type: "string", length: 50, nullable: false)]
    #[Assert\NotBlank]
    private $prenomagent;

    #[ORM\Column(name: "resolution", type: "string", length: 255, nullable: false)]
    #[Assert\NotBlank]
    private $resolution;

 #[ORM\ManyToOne(targetEntity: Reclamation::class)]
#[ORM\JoinColumn(name: "id", referencedColumnName: "id")]
#[Assert\NotBlank]
    private $id;

    public function getReponseId(): ?int
    {
        return $this->reponseId;
    }

    public function getNomagent(): ?string
    {
        return $this->nomagent;
    }

    public function setNomagent(string $nomagent): self
    {
        $this->nomagent = $nomagent;

        return $this;
    }

    public function getPrenomagent(): ?string
    {
        return $this->prenomagent;
    }

    public function setPrenomagent(string $prenomagent): self
    {
        $this->prenomagent = $prenomagent;

        return $this;
    }

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    public function setResolution(string $resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getId(): ?Reclamation
    {
        return $this->id;
    }

    public function setId(?Reclamation $id): self
    {
        $this->id = $id;

        return $this;
    }
}
