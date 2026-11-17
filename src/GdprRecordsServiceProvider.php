<?php

namespace JeffersonGoncalves\Filament\GdprRecords;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GdprRecordsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-gdpr-records';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
