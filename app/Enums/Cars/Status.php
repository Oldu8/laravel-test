<?php

namespace App\Enums\Cars;

enum Status: int
{
    case DRAFT = 0;
    case ACTIVE = 1;
    case SOLD = 2;
    case CANCELLED = 3;

    public function label(): string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::ACTIVE => 'Active',
            self::SOLD => 'Sold',
            self::CANCELLED => 'Cancelled',
        };
    }
}