<?php

return [
    'resource' => [
        'label' => 'Atividade de tratamento',
        'plural_label' => 'Atividades de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'legal_basis' => 'Fundamento jurídico',
        'data_subjects' => 'Titulares',
        'data_categories' => 'Outras categorias de dados',
        'models' => 'Modelos',
        'recipients' => 'Destinatários',
        'recipient_name' => 'Nome',
        'role' => 'Papel',
        'country' => 'País (código ISO)',
        'international_transfers' => 'Transferências para fora do EEE',
        'international' => 'Fora do EEE',
        'mechanism' => 'Mecanismo de transferência (capítulo V)',
        'retention' => 'Prazos de apagamento',
        'security_measures' => 'Medidas de segurança (art. 32.º)',
    ],

    'placeholders' => [
        'data_subjects' => 'clientes, colaboradores...',
    ],

    'help' => [
        'data_categories' => 'Dados não declarados num modelo com #[PersonalData].',
        'models' => 'Os dados pessoais declarados nestes modelos entram no registo.',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 6.º, n.º 1, al. a))',
        'contract' => 'Contrato (art. 6.º, n.º 1, al. b))',
        'legal_obligation' => 'Obrigação jurídica (art. 6.º, n.º 1, al. c))',
        'vital_interests' => 'Interesses vitais (art. 6.º, n.º 1, al. d))',
        'public_task' => 'Interesse público (art. 6.º, n.º 1, al. e))',
        'legitimate_interests' => 'Interesses legítimos (art. 6.º, n.º 1, al. f))',
    ],

    'roles' => [
        'processor' => 'Subcontratante',
        'controller' => 'Responsável pelo tratamento',
        'public_authority' => 'Autoridade pública',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisão de adequação (art. 45.º)',
        'standard_clauses' => 'Cláusulas contratuais-tipo (art. 46.º, n.º 2, al. c))',
        'binding_corporate_rules' => 'Regras vinculativas aplicáveis às empresas (art. 47.º)',
        'codes_certification' => 'Código de conduta ou certificação (art. 46.º, n.º 2, als. e)-f))',
        'derogation' => 'Derrogação para situações específicas (art. 49.º)',
    ],

    'actions' => [
        'export' => 'Exportar registos (JSON)',
    ],
];
