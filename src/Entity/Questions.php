<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", indexes={@ORM\Index(name="questions_fk", columns={"id_quiz"})})
 * @ORM\Entity
 */
/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionsRepository")
 */
class Questions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_question", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="question_text", type="text", length=65535, nullable=false)
     */
    private $questionText;

    /**
     * @var \Quizs
     *
     * @ORM\ManyToOne(targetEntity="Quizs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_quiz", referencedColumnName="id_quiz")
     * })
     */
    private $idQuiz;

    public function getIdQuestion(): ?int
    {
        return $this->idQuestion;
    }

    public function getQuestionText(): ?string
    {
        return $this->questionText;
    }

    public function setQuestionText(string $questionText): self
    {
        $this->questionText = $questionText;

        return $this;
    }

    public function getIdQuiz(): ?Quizs
    {
        return $this->idQuiz;
    }

    public function setIdQuiz(?Quizs $idQuiz): self
    {
        $this->idQuiz = $idQuiz;

        return $this;
    }

    public function __toString()
    {
        return $this->getQuestionText(); // Or some other property you want to use as a string representation of the Question object
    }
}
