<?php

use JeffersonGoncalves\Filament\GdprRecords\GdprRecordsPlugin;
use JeffersonGoncalves\Filament\GdprRecords\Resources\ProcessingActivities\Pages\CreateProcessingActivity;
use JeffersonGoncalves\Filament\GdprRecords\Resources\ProcessingActivities\Pages\EditProcessingActivity;
use JeffersonGoncalves\Filament\GdprRecords\Resources\ProcessingActivities\Pages\ListProcessingActivities;
use JeffersonGoncalves\Filament\GdprRecords\Resources\ProcessingActivities\ProcessingActivityResource;
use JeffersonGoncalves\Filament\GdprRecords\Tests\Fixtures\TestUser;
use JeffersonGoncalves\Gdpr\Enums\LegalBasis;
use JeffersonGoncalves\GdprRecords\Models\ProcessingActivity;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('creates a processing activity linked to models, recipients and transfers', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm([
            'name' => 'Billing',
            'purpose' => 'Issue invoices',
            'legal_basis' => 'contract',
            'data_subjects' => ['customers'],
            'models' => [TestUser::class],
            'recipients' => [['name' => 'Stripe', 'role' => 'processor', 'country' => 'US']],
            'international_transfers' => [['country' => 'US', 'mechanism' => 'standard_clauses']],
            'retention' => '5 years',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(ProcessingActivity::sole())
        ->legal_basis->toBe(LegalBasis::Contract)
        ->models->toBe([TestUser::class])
        ->recipients->toBe([['name' => 'Stripe', 'role' => 'processor', 'country' => 'US']])
        ->international_transfers->toBe([['country' => 'US', 'mechanism' => 'standard_clauses']]);
});

it('requires a name and a purpose', function () {
    Livewire::test(CreateProcessingActivity::class)
        ->fillForm(['name' => '', 'purpose' => ''])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'purpose' => 'required']);
});

it('lists and edits activities', function () {
    $activity = ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'legal_basis' => LegalBasis::Contract]);

    Livewire::test(ListProcessingActivities::class)
        ->assertCanSeeTableRecords([$activity])
        ->assertSee('Contract (Art. 6(1)(b))');

    Livewire::test(EditProcessingActivity::class, ['record' => $activity->getKey()])
        ->fillForm(['legal_basis' => 'legal_obligation'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($activity->fresh()->legal_basis)->toBe(LegalBasis::LegalObligation);
});

it('exports the records as JSON', function () {
    ProcessingActivity::create(['name' => 'Billing', 'purpose' => 'Invoices', 'models' => [TestUser::class]]);

    Livewire::test(ListProcessingActivities::class)
        ->callAction('export')
        ->assertFileDownloaded('ropa-'.now()->format('Y-m-d').'.json');
});

it('applies the fluent plugin options', function () {
    GdprRecordsPlugin::get()->navigationGroup('GDPR')->slug('ropa');

    expect(ProcessingActivityResource::getNavigationGroup())->toBe('GDPR')
        ->and(ProcessingActivityResource::getSlug())->toBe('ropa');
});
