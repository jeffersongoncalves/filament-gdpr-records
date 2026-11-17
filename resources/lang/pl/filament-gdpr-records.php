<?php

return [
    'resource' => [
        'label' => 'Czynność przetwarzania',
        'plural_label' => 'Czynności przetwarzania',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'purpose' => 'Cel',
        'legal_basis' => 'Podstawa prawna',
        'data_subjects' => 'Osoby, których dane dotyczą',
        'data_categories' => 'Inne kategorie danych',
        'models' => 'Modele',
        'recipients' => 'Odbiorcy',
        'recipient_name' => 'Nazwa',
        'role' => 'Rola',
        'country' => 'Kraj (kod ISO)',
        'international_transfers' => 'Przekazywanie poza EOG',
        'international' => 'Poza EOG',
        'mechanism' => 'Mechanizm przekazywania (rozdział V)',
        'retention' => 'Terminy usunięcia',
        'security_measures' => 'Środki bezpieczeństwa (art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'klienci, pracownicy...',
    ],

    'help' => [
        'data_categories' => 'Dane niezadeklarowane w modelu przez #[PersonalData].',
        'models' => 'Dane osobowe zadeklarowane w tych modelach trafiają do rejestru.',
    ],

    'legal_basis' => [
        'consent' => 'Zgoda (art. 6 ust. 1 lit. a)',
        'contract' => 'Umowa (art. 6 ust. 1 lit. b)',
        'legal_obligation' => 'Obowiązek prawny (art. 6 ust. 1 lit. c)',
        'vital_interests' => 'Żywotne interesy (art. 6 ust. 1 lit. d)',
        'public_task' => 'Zadanie publiczne (art. 6 ust. 1 lit. e)',
        'legitimate_interests' => 'Prawnie uzasadnione interesy (art. 6 ust. 1 lit. f)',
    ],

    'roles' => [
        'processor' => 'Podmiot przetwarzający',
        'controller' => 'Administrator',
        'public_authority' => 'Organ publiczny',
    ],

    'mechanisms' => [
        'adequacy' => 'Decyzja stwierdzająca odpowiedni stopień ochrony (art. 45)',
        'standard_clauses' => 'Standardowe klauzule umowne (art. 46 ust. 2 lit. c)',
        'binding_corporate_rules' => 'Wiążące reguły korporacyjne (art. 47)',
        'codes_certification' => 'Kodeks postępowania lub certyfikacja (art. 46 ust. 2 lit. e-f)',
        'derogation' => 'Wyjątek w szczególnej sytuacji (art. 49)',
    ],

    'actions' => [
        'export' => 'Eksportuj rejestr (JSON)',
    ],
];
