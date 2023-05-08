<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Entity\Quizs;
use App\Repository\QuestionsRepository;


#[ORM\Entity(repositoryClass: QuestionsRepository::class)]
class Questions
{
    #[ORM\Id]
    #[ORM\Column(name: "id_question", type: "integer", nullable: false)]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[Groups("questions")]
    private $idQuestion;

    #[ORM\Column(name: "question_text", type: "text", length: 65535, nullable: false)]
    #[Groups("questions")]
    private $questionText;

 #[ORM\ManyToOne(targetEntity: Quizs::class)]
#[ORM\JoinColumn(name: "id_quiz", referencedColumnName: "id_quiz")]
#[Groups("questions")]
private ?Quizs $idQuiz;

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
        $this->$idQuiz = $idQuiz;

        return $this;
    }

    public function __toString()
    {
        return $this->getQuestionText(); // Or some other property you want to use as a string representation of the Question object
    }
}