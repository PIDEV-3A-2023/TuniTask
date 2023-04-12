<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\QuizsRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Quizs
 *
 * @ORM\Table(name="quizs")
 * @ORM\Entity
 */
/**
 * @ORM\Entity(repositoryClass="App\Repository\QuizsRepository")
 */
class Quizs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_quiz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuiz;

    /**
     * @var string
     *
     * @ORM\Column(name="quiz_title", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Quiz title cannot be blank")
     * @Assert\Length(max="20", maxMessage="Quiz title cannot be longer than {{ limit }} characters")
     */
    private $quizTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="quiz_description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Quiz description cannot be blank")
     * @Assert\Length(max="255", maxMessage="Quiz description cannot be longer than {{ limit }} characters")
     */
    private $quizDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="score", type="string", length=255, nullable=true, options={"default"="NULL"})
     * @Assert\NotBlank(message="Score cannot be blank")
     * @Assert\Regex(
     *     pattern="/^[0-9]\d*$/",
     *     message="Score must be a positive integer"
     * )
     */
    private $score ;

    public function getIdQuiz(): ?int
    {
        return $this->idQuiz;
    }

    public function getQuizTitle(): ?string
    {
        return $this->quizTitle;
    }

    public function setQuizTitle(string $quizTitle): self
    {
        $this->quizTitle = $quizTitle;

        return $this;
    }

    public function getQuizDescription(): ?string
    {
        return $this->quizDescription;
    }

    public function setQuizDescription(string $quizDescription): self
    {
        $this->quizDescription = $quizDescription;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(?string $score): self
    {
        $this->score = $score;

        return $this;
    }
    public function __toString()
    {
        return $this->quizTitle;
    }
}
