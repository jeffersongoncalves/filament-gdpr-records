<?php

return [
    'resource' => [
        'label' => 'Processing activity',
        'plural_label' => 'Processing activities',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Purpose',
        'legal_basis' => 'Lawful basis',
        'data_subjects' => 'Data subjects',
        'data_categories' => 'Other data categories',
        'models' => 'Models',
        'recipients' => 'Recipients',
        'recipient_name' => 'Name',
        'role' => 'Role',
        'country' => 'Country (ISO code)',
        'international_transfers' => 'Transfers outside the EEA',
        'international' => 'Outside the EEA',
        'mechanism' => 'Transfer mechanism (Chapter V)',
        'retention' => 'Time limits for erasure',
        'security_measures' => 'Security measures (Art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'customers, employees...',
    ],

    'help' => [
        'data_categories' => 'Data not declared on a model with #[PersonalData].',
        'models' => 'The personal data declared on these models joins the record.',
    ],

    'legal_basis' => [
        'consent' => 'Consent (Art. 6(1)(a))',
        'contract' => 'Contract (Art. 6(1)(b))',
        'legal_obligation' => 'Legal obligation (Art. 6(1)(c))',
        'vital_interests' => 'Vital interests (Art. 6(1)(d))',
        'public_task' => 'Public task (Art. 6(1)(e))',
        'legitimate_interests' => 'Legitimate interests (Art. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Processor',
        'controller' => 'Controller',
        'public_authority' => 'Public authority',
    ],

    'mechanisms' => [
        'adequacy' => 'Adequacy decision (Art. 45)',
        'standard_clauses' => 'Standard contractual clauses (Art. 46(2)(c))',
        'binding_corporate_rules' => 'Binding corporate rules (Art. 47)',
        'codes_certification' => 'Code of conduct or certification (Art. 46(2)(e)-(f))',
        'derogation' => 'Derogation for a specific situation (Art. 49)',
    ],

    'actions' => [
        'export' => 'Export records (JSON)',
    ],
];
