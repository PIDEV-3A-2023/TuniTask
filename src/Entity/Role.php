<?php

namespace App\Entity;
use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role", indexes={@ORM\Index(name="IDX_ROLE_USER", columns={"id_user"})})
 * @ORM\Entity
 */
#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
     #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private $idRole;

    #[ORM\Column(length: 255)]
    private $roleName;

    #[ORM\Column(length: 255)]
    private $skills;

    #[ORM\Column(length: 255)]
    private $experience;

    #[ORM\Column(length: 255)]
    private $entreprise;

   #[ORM\Column(length: 255)]
    private $langageDeProgrammation;
#[ORM\ManyToOne(targetEntity: "Users")]
#[ORM\JoinColumn(name: "id_user", referencedColumnName: "id")]
    private $idUser;

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
