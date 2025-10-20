<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum Module: string implements HasColor, HasLabel
{
    case BAPTISM = 'baptism';
    case FUNERAL = 'funeral';
    case WEDDING = 'wedding';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BAPTISM => __('app.general.enum_module.baptist'),
            self::FUNERAL => __('app.general.enum_module.funeral'),
            self::WEDDING => __('app.general.enum_module.wedding'),
        };
    }

    public function getPluralLabel(): ?string
    {
        return match ($this) {
            self::BAPTISM => __('app.general.enum_module.plural.baptist'),
            self::FUNERAL => __('app.general.enum_module.plural.funeral'),
            self::WEDDING => __('app.general.enum_module.plural.wedding'),
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::BAPTISM => 'info',
            self::FUNERAL => 'gray',
            self::WEDDING => 'danger',
        };
    }
}
