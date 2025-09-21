<?php

namespace App\Enums;

// https://filamentphp.com/docs/3.x/support/enums
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;

enum ProductStatusEnum: int implements HasLabel, HasColor, HasIcon
{
    case IN_STOCK = 1;
    case SOLD_OUT = 2;
    case COMING_SOON = 3;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::IN_STOCK => 'In Stock',
            self::SOLD_OUT => 'Sold Out',
            self::COMING_SOON => 'Coming Soon',
        };      
    }

    public function getColor(): string
    {
        return match ($this) {
            self::IN_STOCK => 'success',
            self::SOLD_OUT => 'danger',
            self::COMING_SOON => 'warning',
        };
    }

    public function getIcon(): string
    {
        return match ($this) {
            self::IN_STOCK => 'heroicon-o-check-circle',
            self::SOLD_OUT => 'heroicon-o-x-circle',
            self::COMING_SOON => 'heroicon-o-clock',
        };
    }
}