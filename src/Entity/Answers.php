<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Answers
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "id_answer", type: "integer")]
    private $idAnswer;

    #[ORM\Column(name: "id_quiz", type: "integer")]
    private $idQuiz;

    #[ORM\Column(name: "answer", type: "string", length: 255)]
    private $answer;

    #[ORM\Column(name: "is_correct", type: "boolean")]
    private $isCorrect;

    #[ORM\ManyToOne(targetEntity: "Questions")]
    #[ORM\JoinColumn(name: "id_question", referencedColumnName: "id_question")]
    private $idQuestion;
    public function getIdAnswer(): ?int
    {
        return $this->idAnswer;
    }

    public function getIdQuiz(): ?int
    {
        return $this->idQuiz;
    }

    public function setIdQuiz(int $idQuiz): self
    {
        $this->idQuiz = $idQuiz;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function isIsCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect(bool $isCorrect): self
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    public function getIdQuestion(): ?Questions
    {
        return $this->idQuestion;
    }

    public function setIdQuestion(?Questions $idQuestion): self
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }


}
