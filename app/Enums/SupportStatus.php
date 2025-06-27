<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = 'open';
    case C = 'closed';
    case P = 'pending';

    public static function fromValues(string $name)
    {
        foreach (self::cases() as $status) {
            if ($name === $status->name) {
                return $status->value;
            }
        }
        throw new \ValueError($status . "not found");
    }
}
