<?php

return [
    'resource' => [
        'label' => 'Verwerkingsactiviteit',
        'plural_label' => 'Verwerkingsactiviteiten',
    ],

    'fields' => [
        'name' => 'Naam',
        'purpose' => 'Doel',
        'legal_basis' => 'Rechtsgrond',
        'data_subjects' => 'Betrokkenen',
        'data_categories' => 'Andere gegevenscategorieën',
        'models' => 'Modellen',
        'recipients' => 'Ontvangers',
        'recipient_name' => 'Naam',
        'role' => 'Rol',
        'country' => 'Land (ISO-code)',
        'international_transfers' => 'Doorgiften buiten de EER',
        'international' => 'Buiten de EER',
        'mechanism' => 'Doorgiftemechanisme (hoofdstuk V)',
        'retention' => 'Termijnen voor wissing',
        'security_measures' => 'Beveiligingsmaatregelen (art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'klanten, medewerkers...',
    ],

    'help' => [
        'data_categories' => 'Gegevens die niet met #[PersonalData] in een model zijn opgegeven.',
        'models' => 'De persoonsgegevens die in deze modellen zijn opgegeven, komen in het register.',
    ],

    'legal_basis' => [
        'consent' => 'Toestemming (art. 6(1)(a))',
        'contract' => 'Overeenkomst (art. 6(1)(b))',
        'legal_obligation' => 'Wettelijke verplichting (art. 6(1)(c))',
        'vital_interests' => 'Vitale belangen (art. 6(1)(d))',
        'public_task' => 'Taak van algemeen belang (art. 6(1)(e))',
        'legitimate_interests' => 'Gerechtvaardigde belangen (art. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Verwerker',
        'controller' => 'Verwerkingsverantwoordelijke',
        'public_authority' => 'Overheidsinstantie',
    ],

    'mechanisms' => [
        'adequacy' => 'Adequaatheidsbesluit (art. 45)',
        'standard_clauses' => 'Modelcontractbepalingen (art. 46(2)(c))',
        'binding_corporate_rules' => 'Bindende bedrijfsvoorschriften (art. 47)',
        'codes_certification' => 'Gedragscode of certificering (art. 46(2)(e)-(f))',
        'derogation' => 'Afwijking voor een specifieke situatie (art. 49)',
    ],

    'actions' => [
        'export' => 'Register exporteren (JSON)',
    ],
];
