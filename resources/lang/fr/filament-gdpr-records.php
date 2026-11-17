<?php

return [
    'resource' => [
        'label' => 'Activité de traitement',
        'plural_label' => 'Activités de traitement',
    ],

    'fields' => [
        'name' => 'Nom',
        'purpose' => 'Finalité',
        'legal_basis' => 'Base juridique',
        'data_subjects' => 'Personnes concernées',
        'data_categories' => 'Autres catégories de données',
        'models' => 'Modèles',
        'recipients' => 'Destinataires',
        'recipient_name' => 'Nom',
        'role' => 'Rôle',
        'country' => 'Pays (code ISO)',
        'international_transfers' => 'Transferts hors de l\'EEE',
        'international' => 'Hors de l\'EEE',
        'mechanism' => 'Mécanisme de transfert (chapitre V)',
        'retention' => 'Délais d\'effacement',
        'security_measures' => 'Mesures de sécurité (art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'clients, salariés...',
    ],

    'help' => [
        'data_categories' => 'Données non déclarées dans un modèle avec #[PersonalData].',
        'models' => 'Les données personnelles déclarées dans ces modèles rejoignent le registre.',
    ],

    'legal_basis' => [
        'consent' => 'Consentement (art. 6(1)(a))',
        'contract' => 'Contrat (art. 6(1)(b))',
        'legal_obligation' => 'Obligation légale (art. 6(1)(c))',
        'vital_interests' => 'Intérêts vitaux (art. 6(1)(d))',
        'public_task' => 'Mission d\'intérêt public (art. 6(1)(e))',
        'legitimate_interests' => 'Intérêts légitimes (art. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Sous-traitant',
        'controller' => 'Responsable du traitement',
        'public_authority' => 'Autorité publique',
    ],

    'mechanisms' => [
        'adequacy' => 'Décision d\'adéquation (art. 45)',
        'standard_clauses' => 'Clauses contractuelles types (art. 46(2)(c))',
        'binding_corporate_rules' => 'Règles d\'entreprise contraignantes (art. 47)',
        'codes_certification' => 'Code de conduite ou certification (art. 46(2)(e)-(f))',
        'derogation' => 'Dérogation pour une situation particulière (art. 49)',
    ],

    'actions' => [
        'export' => 'Exporter le registre (JSON)',
    ],
];
