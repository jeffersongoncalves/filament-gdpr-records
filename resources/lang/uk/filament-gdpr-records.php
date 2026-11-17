<?php

return [
    'resource' => [
        'label' => 'Операція обробки',
        'plural_label' => 'Операції обробки',
    ],

    'fields' => [
        'name' => 'Назва',
        'purpose' => 'Мета',
        'legal_basis' => 'Правова підстава',
        'data_subjects' => 'Суб\'єкти даних',
        'data_categories' => 'Інші категорії даних',
        'models' => 'Моделі',
        'recipients' => 'Отримувачі',
        'recipient_name' => 'Назва',
        'role' => 'Роль',
        'country' => 'Країна (код ISO)',
        'international_transfers' => 'Передавання за межі ЄЕЗ',
        'international' => 'За межами ЄЕЗ',
        'mechanism' => 'Механізм передавання (глава V)',
        'retention' => 'Строки видалення',
        'security_measures' => 'Заходи безпеки (ст. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'клієнти, працівники...',
    ],

    'help' => [
        'data_categories' => 'Дані, не оголошені в моделі через #[PersonalData].',
        'models' => 'Персональні дані, оголошені в цих моделях, входять до реєстру.',
    ],

    'legal_basis' => [
        'consent' => 'Згода (ст. 6(1)(a))',
        'contract' => 'Договір (ст. 6(1)(b))',
        'legal_obligation' => 'Юридичний обов\'язок (ст. 6(1)(c))',
        'vital_interests' => 'Життєво важливі інтереси (ст. 6(1)(d))',
        'public_task' => 'Публічне завдання (ст. 6(1)(e))',
        'legitimate_interests' => 'Законні інтереси (ст. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Обробник',
        'controller' => 'Контролер',
        'public_authority' => 'Державний орган',
    ],

    'mechanisms' => [
        'adequacy' => 'Рішення про адекватність (ст. 45)',
        'standard_clauses' => 'Стандартні договірні положення (ст. 46(2)(c))',
        'binding_corporate_rules' => 'Зобов\'язальні корпоративні правила (ст. 47)',
        'codes_certification' => 'Кодекс поведінки або сертифікація (ст. 46(2)(e)-(f))',
        'derogation' => 'Відступ для особливої ситуації (ст. 49)',
    ],

    'actions' => [
        'export' => 'Експорт реєстру (JSON)',
    ],
];
