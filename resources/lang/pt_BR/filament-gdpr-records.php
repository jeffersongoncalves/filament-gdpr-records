<?php

return [
    'resource' => [
        'label' => 'Operação de tratamento',
        'plural_label' => 'Operações de tratamento',
    ],

    'fields' => [
        'name' => 'Nome',
        'purpose' => 'Finalidade',
        'legal_basis' => 'Base legal',
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
        'retention' => 'Prazos para apagamento',
        'security_measures' => 'Medidas de segurança (art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'clientes, funcionários...',
    ],

    'help' => [
        'data_categories' => 'Dados não declarados em um modelo com #[PersonalData].',
        'models' => 'Os dados pessoais declarados nesses modelos entram no registro.',
    ],

    'legal_basis' => [
        'consent' => 'Consentimento (art. 6(1)(a))',
        'contract' => 'Contrato (art. 6(1)(b))',
        'legal_obligation' => 'Obrigação legal (art. 6(1)(c))',
        'vital_interests' => 'Interesses vitais (art. 6(1)(d))',
        'public_task' => 'Interesse público (art. 6(1)(e))',
        'legitimate_interests' => 'Interesses legítimos (art. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Operador',
        'controller' => 'Controlador',
        'public_authority' => 'Poder público',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisão de adequação (art. 45)',
        'standard_clauses' => 'Cláusulas contratuais-tipo (art. 46(2)(c))',
        'binding_corporate_rules' => 'Regras vinculativas aplicáveis às empresas (art. 47)',
        'codes_certification' => 'Código de conduta ou certificação (art. 46(2)(e)-(f))',
        'derogation' => 'Derrogação para uma situação específica (art. 49)',
    ],

    'actions' => [
        'export' => 'Exportar registros (JSON)',
    ],
];
