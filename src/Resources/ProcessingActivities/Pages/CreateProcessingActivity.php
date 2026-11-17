<?php

namespace JeffersonGoncalves\Filament\GdprRecords\Resources\ProcessingActivities\Pages;

use Filament\Resources\Pages\CreateRecord;
use JeffersonGoncalves\Filament\GdprRecords\Resources\ProcessingActivities\ProcessingActivityResource;

class CreateProcessingActivity extends CreateRecord
{
    protected static string $resource = ProcessingActivityResource::class;
}
