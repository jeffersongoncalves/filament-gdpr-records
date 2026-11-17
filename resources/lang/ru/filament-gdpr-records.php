<?php

return [
    'resource' => [
        'label' => 'Операция обработки',
        'plural_label' => 'Операции обработки',
    ],

    'fields' => [
        'name' => 'Название',
        'purpose' => 'Цель',
        'legal_basis' => 'Правовое основание',
        'data_subjects' => 'Субъекты данных',
        'data_categories' => 'Другие категории данных',
        'models' => 'Модели',
        'recipients' => 'Получатели',
        'recipient_name' => 'Название',
        'role' => 'Роль',
        'country' => 'Страна (код ISO)',
        'international_transfers' => 'Передачи за пределы ЕЭЗ',
        'international' => 'За пределами ЕЭЗ',
        'mechanism' => 'Механизм передачи (глава V)',
        'retention' => 'Сроки удаления',
        'security_measures' => 'Меры безопасности (ст. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'клиенты, сотрудники...',
    ],

    'help' => [
        'data_categories' => 'Данные, не объявленные в модели через #[PersonalData].',
        'models' => 'Персональные данные, объявленные в этих моделях, входят в реестр.',
    ],

    'legal_basis' => [
        'consent' => 'Согласие (ст. 6(1)(a))',
        'contract' => 'Договор (ст. 6(1)(b))',
        'legal_obligation' => 'Юридическая обязанность (ст. 6(1)(c))',
        'vital_interests' => 'Жизненно важные интересы (ст. 6(1)(d))',
        'public_task' => 'Публичная задача (ст. 6(1)(e))',
        'legitimate_interests' => 'Законные интересы (ст. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Обработчик',
        'controller' => 'Контролёр',
        'public_authority' => 'Государственный орган',
    ],

    'mechanisms' => [
        'adequacy' => 'Решение о достаточности (ст. 45)',
        'standard_clauses' => 'Стандартные договорные положения (ст. 46(2)(c))',
        'binding_corporate_rules' => 'Обязательные корпоративные правила (ст. 47)',
        'codes_certification' => 'Кодекс поведения или сертификация (ст. 46(2)(e)-(f))',
        'derogation' => 'Исключение для особой ситуации (ст. 49)',
    ],

    'actions' => [
        'export' => 'Экспорт реестра (JSON)',
    ],
];
