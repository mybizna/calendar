<?php

namespace Modules\Calendar\Filament;

use Coolsam\Modules\Concerns\ModuleFilamentPlugin;
use Filament\Contracts\Plugin;
use Filament\Panel;

class CalendarPlugin implements Plugin
{
    use ModuleFilamentPlugin;

    public function getModuleName(): string
    {
        return 'Calendar';
    }

    public function getId(): string
    {
        return 'calendar';
    }

    public function boot(Panel $panel): void
    {
        // TODO: Implement boot() method.
    }
}
