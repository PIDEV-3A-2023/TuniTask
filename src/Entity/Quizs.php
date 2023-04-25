<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quizs
 *
 * @ORM\Table(name="quizs")
 * @ORM\Entity
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
     */
    private $quizTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="quiz_description", type="string", length=255, nullable=false)
     */
    private $quizDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="score", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $score = 'NULL';

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


}
