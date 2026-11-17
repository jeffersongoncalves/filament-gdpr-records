<?php

namespace JeffersonGoncalves\Filament\GdprRecords;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprRecordsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-gdpr-records')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
