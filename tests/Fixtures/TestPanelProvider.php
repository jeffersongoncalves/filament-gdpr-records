<?php

namespace JeffersonGoncalves\Filament\GdprRecords\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\GdprRecords\GdprRecordsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                GdprRecordsPlugin::make(),
            ]);
    }
}
