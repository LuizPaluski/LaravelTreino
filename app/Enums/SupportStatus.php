<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = 'open';
    case C = 'closed';
    case P = 'pending';

    public static function fromValues(string $status){
        foreach (self::cases() as $case) {
            if ($status === $status->name) {
                return $status->value;
            }
        }
            throw new \ValueError($status . "not found");
}
