<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\QuizsRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass:QuizsRepository::class)]
class Quizs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_quiz", type: "integer", nullable: false)]
     #[Groups("quizs")]
    private int $idQuiz;

    #[ORM\Column(name: "quiz_title", type: "string", length: 255, nullable: false)]
    #[Assert\NotBlank(message: "Quiz title cannot be blank")]
    #[Assert\Length(max: 20, maxMessage: "Quiz title cannot be longer than {{ limit }} characters")]
    #[Groups("quizs")]
    private string $quizTitle;

    #[ORM\Column(name: "quiz_description", type: "string", length: 255, nullable: false)]
    #[Assert\NotBlank(message: "Quiz description cannot be blank")]
    #[Assert\Length(max: 255, maxMessage: "Quiz description cannot be longer than {{ limit }} characters")]
    #[Groups("quizs")]
    private string $quizDescription;

    #[ORM\Column(name: "score", type: "string", length: 255, nullable: true, options: ["default" => "NULL"])]
    #[Assert\NotBlank(message: "Score cannot be blank")]
    #[Assert\Regex(
        pattern: "/^[0-9]\d*$/",
        message: "Score must be a positive integer"
    )]
    #[Groups("quizs")]
    private ?string $score = null;

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