<?php

namespace App\Validator;
use Attribute;
use Symfony\Component\Validator\Constraint;

#[Attribute]
class ContainsBadWords extends Constraint
{
   
    public $message = 'The reclamation "{{ string }}" contains bad words that are against our company policies.';
public function __construct(array $options = [])
    {
        parent::__construct($options);
    }
    public function validatedBy()
    {
        return \get_class($this).'Validator';
    }
}
