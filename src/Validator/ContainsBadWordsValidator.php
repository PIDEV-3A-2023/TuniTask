<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ContainsBadWordsValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        $badWords = ['fuck', 'bad', 'bad words']; // Define an array of bad words to check against

        foreach ($badWords as $word) {
            if (stripos($value, $word) !== false) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ string }}', $value)
                    ->setParameter('{{ badWords }}', implode(', ', $badWords))
                    ->addViolation();
            }
        }
    }
}
