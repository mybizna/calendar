<?php

namespace Modules\Calendar\Filament\Clusters;

use Filament\Clusters\Cluster;
use Nwidart\Modules\Facades\Module;

class Calendar extends Cluster
{
    public static function getModuleName(): string
    {
        return 'Calendar';
    }

    public static function getModule(): \Nwidart\Modules\Module
    {
        return Module::findOrFail(static::getModuleName());
    }

    public static function getNavigationLabel(): string
    {
        return __('Calendar');
    }

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-squares-2x2';
    }
}
