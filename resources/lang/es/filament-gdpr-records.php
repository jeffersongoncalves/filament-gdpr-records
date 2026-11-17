<?php

return [
    'resource' => [
        'label' => 'Actividad de tratamiento',
        'plural_label' => 'Actividades de tratamiento',
    ],

    'fields' => [
        'name' => 'Nombre',
        'purpose' => 'Finalidad',
        'legal_basis' => 'Base jurídica',
        'data_subjects' => 'Titulares',
        'data_categories' => 'Otras categorías de datos',
        'models' => 'Modelos',
        'recipients' => 'Destinatarios',
        'recipient_name' => 'Nombre',
        'role' => 'Rol',
        'country' => 'País (código ISO)',
        'international_transfers' => 'Transferencias fuera del EEE',
        'international' => 'Fuera del EEE',
        'mechanism' => 'Mecanismo de transferencia (capítulo V)',
        'retention' => 'Plazos de supresión',
        'security_measures' => 'Medidas de seguridad (art. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'clientes, empleados...',
    ],

    'help' => [
        'data_categories' => 'Datos no declarados en un modelo con #[PersonalData].',
        'models' => 'Los datos personales declarados en estos modelos entran en el registro.',
    ],

    'legal_basis' => [
        'consent' => 'Consentimiento (art. 6(1)(a))',
        'contract' => 'Contrato (art. 6(1)(b))',
        'legal_obligation' => 'Obligación legal (art. 6(1)(c))',
        'vital_interests' => 'Intereses vitales (art. 6(1)(d))',
        'public_task' => 'Misión de interés público (art. 6(1)(e))',
        'legitimate_interests' => 'Intereses legítimos (art. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Encargado',
        'controller' => 'Responsable del tratamiento',
        'public_authority' => 'Autoridad pública',
    ],

    'mechanisms' => [
        'adequacy' => 'Decisión de adecuación (art. 45)',
        'standard_clauses' => 'Cláusulas contractuales tipo (art. 46(2)(c))',
        'binding_corporate_rules' => 'Normas corporativas vinculantes (art. 47)',
        'codes_certification' => 'Código de conducta o certificación (art. 46(2)(e)-(f))',
        'derogation' => 'Excepción para situaciones específicas (art. 49)',
    ],

    'actions' => [
        'export' => 'Exportar registro (JSON)',
    ],
];
