<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UppercaseRule implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (ucfirst($value) !== $value) {
            $fail('The title does not start with an uppercased letter');
        }
    }
}
