<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Role
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_role", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role_name", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $roleName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="skills", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $skills = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="experience", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $experience = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="entreprise", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $entreprise = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="langage_de_programmation", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $langageDeProgrammation = 'NULL';

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
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
