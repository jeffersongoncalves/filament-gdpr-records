<?php

return [
    'resource' => [
        'label' => 'Attività di trattamento',
        'plural_label' => 'Attività di trattamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalità',
        'legal_basis' => 'Base giuridica',
        'data_subjects' => 'Interessati',
        'data_categories' => 'Altre categorie di dati',
        'models' => 'Modelli',
        'recipients' => 'Destinatari',
        'recipient_name' => 'Nome',
        'role' => 'Ruolo',
        'country' => 'Paese (codice ISO)',
        'international_transfers' => 'Trasferimenti fuori dal SEE',
        'international' => 'Fuori dal SEE',
        'mechanism' => 'Meccanismo di trasferimento (capo V)',
        'retention' => 'Termini di cancellazione',
        'security_measures' => 'Misure di sicurezza (art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'clienti, dipendenti...',
    ],

    'help' => [
        'data_categories' => 'Dati non dichiarati in un modello con #[PersonalData].',
        'models' => 'I dati personali dichiarati in questi modelli entrano nel registro.',
    ],

    'legal_basis' => [
        'consent' => 'Consenso (art. 6(1)(a))',
        'contract' => 'Contratto (art. 6(1)(b))',
        'legal_obligation' => 'Obbligo legale (art. 6(1)(c))',
        'vital_interests' => 'Interessi vitali (art. 6(1)(d))',
        'public_task' => 'Compito di interesse pubblico (art. 6(1)(e))',
        'legitimate_interests' => 'Interessi legittimi (art. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Responsabile del trattamento',
        'controller' => 'Titolare del trattamento',
        'public_authority' => 'Autorità pubblica',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisione di adeguatezza (art. 45)',
        'standard_clauses' => 'Clausole contrattuali tipo (art. 46(2)(c))',
        'binding_corporate_rules' => 'Norme vincolanti d\'impresa (art. 47)',
        'codes_certification' => 'Codice di condotta o certificazione (art. 46(2)(e)-(f))',
        'derogation' => 'Deroga per situazioni specifiche (art. 49)',
    ],

    'actions' => [
        'export' => 'Esporta registro (JSON)',
    ],
];
