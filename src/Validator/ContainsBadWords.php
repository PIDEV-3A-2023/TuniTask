<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsBadWords extends Constraint
{
    public $message = 'The reclamation "{{ string }}" contains bad words that are against our company policies.';

    public function validatedBy()
    {
        return \get_class($this).'Validator';
    }
}
