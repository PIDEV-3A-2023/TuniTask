<?php

namespace App\Entity;

use App\Entity\Users;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use App\Repository\RoleRepository;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idRole=null;
    

    #[ORM\Column(length: 255)]
    private ?string $roleName= null;
    

    #[ORM\Column(length: 255)]
    private ?string $skills= null;
    

    #[ORM\Column(length: 255)]
    private ?string $experience= null;
    

    #[ORM\Column(length: 255)]
    private ?string $entreprise= null;
    

    #[ORM\Column(length: 255)]
    private ?string $langageDeProgrammation= null;
    

    #[ORM\ManyToOne(inversedBy: 'Role')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $idUser = null;

    public function getIdRole(): ?int
    {
        return $this->idRole;
    }

    public function getRoleName(): ?string
    {
        return $this->roleName;
    }

    public function setRoleName(?string $roleName): self
    {
        $this->roleName = $roleName;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    public function getLangageDeProgrammation(): ?string
    {
        return $this->langageDeProgrammation;
    }

    public function setLangageDeProgrammation(?string $langageDeProgrammation): self
    {
        $this->langageDeProgrammation = $langageDeProgrammation;

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


}