<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="evenement_id", columns={"evenementId"}), @ORM\Index(name="fk_reservation_users", columns={"idUsers"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsers", referencedColumnName="id")
     * })
     */
    private $idusers;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evenementId", referencedColumnName="id")
     * })
     */
    private $evenementid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdusers(): ?Users
    {
        return $this->idusers;
    }

    public function setIdusers(?Users $idusers): self
    {
        $this->idusers = $idusers;

        return $this;
    }

    public function getEvenementid(): ?Evenement
    {
        return $this->evenementid;
    }

    public function setEvenementid(?Evenement $evenementid): self
    {
        $this->evenementid = $evenementid;

        return $this;
    }


}
