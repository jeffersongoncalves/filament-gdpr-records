<?php

return [
    'resource' => [
        'label' => 'Verarbeitungstätigkeit',
        'plural_label' => 'Verarbeitungstätigkeiten',
    ],

    'fields' => [
        'name' => 'Name',
        'purpose' => 'Zweck',
        'legal_basis' => 'Rechtsgrundlage',
        'data_subjects' => 'Betroffene',
        'data_categories' => 'Weitere Datenkategorien',
        'models' => 'Modelle',
        'recipients' => 'Empfänger',
        'recipient_name' => 'Name',
        'role' => 'Rolle',
        'country' => 'Land (ISO-Code)',
        'international_transfers' => 'Übermittlungen außerhalb des EWR',
        'international' => 'Außerhalb des EWR',
        'mechanism' => 'Übermittlungsmechanismus (Kapitel V)',
        'retention' => 'Löschfristen',
        'security_measures' => 'Sicherheitsmaßnahmen (Art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'Kunden, Mitarbeitende...',
    ],

    'help' => [
        'data_categories' => 'Daten, die nicht mit #[PersonalData] in einem Modell deklariert sind.',
        'models' => 'Die in diesen Modellen deklarierten personenbezogenen Daten werden in das Verzeichnis übernommen.',
    ],

    'legal_basis' => [
        'consent' => 'Einwilligung (Art. 6 Abs. 1 lit. a)',
        'contract' => 'Vertrag (Art. 6 Abs. 1 lit. b)',
        'legal_obligation' => 'Rechtliche Verpflichtung (Art. 6 Abs. 1 lit. c)',
        'vital_interests' => 'Lebenswichtige Interessen (Art. 6 Abs. 1 lit. d)',
        'public_task' => 'Öffentliche Aufgabe (Art. 6 Abs. 1 lit. e)',
        'legitimate_interests' => 'Berechtigte Interessen (Art. 6 Abs. 1 lit. f)',
    ],

    'roles' => [
        'processor' => 'Auftragsverarbeiter',
        'controller' => 'Verantwortlicher',
        'public_authority' => 'Behörde',
    ],

    'mechanisms' => [
        'adequacy' => 'Angemessenheitsbeschluss (Art. 45)',
        'standard_clauses' => 'Standardvertragsklauseln (Art. 46 Abs. 2 lit. c)',
        'binding_corporate_rules' => 'Verbindliche interne Datenschutzvorschriften (Art. 47)',
        'codes_certification' => 'Verhaltensregeln oder Zertifizierung (Art. 46 Abs. 2 lit. e-f)',
        'derogation' => 'Ausnahme für bestimmte Fälle (Art. 49)',
    ],

    'actions' => [
        'export' => 'Verzeichnis exportieren (JSON)',
    ],
];
