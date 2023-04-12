<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponserec
 *
 * @ORM\Table(name="reponserec", indexes={@ORM\Index(name="fk_reponserec", columns={"id"})})
 * @ORM\Entity
 */
class Reponserec
{
    /**
     * @var int
     *
     * @ORM\Column(name="reponse_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reponseId;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAgent", type="string", length=50, nullable=false)
     */
    private $nomagent;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomAgent", type="string", length=50, nullable=false)
     */
    private $prenomagent;

    /**
     * @var string
     *
     * @ORM\Column(name="resolution", type="string", length=255, nullable=false)
     */
    private $resolution;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
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
