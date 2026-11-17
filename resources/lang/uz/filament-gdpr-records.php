<?php

return [
    'resource' => [
        'label' => 'Ishlov berish faoliyati',
        'plural_label' => 'Ishlov berish faoliyatlari',
    ],

    'fields' => [
        'name' => 'Nomi',
        'purpose' => 'Maqsad',
        'legal_basis' => 'Huquqiy asos',
        'data_subjects' => 'Ma\'lumot subyektlari',
        'data_categories' => 'Boshqa ma\'lumot toifalari',
        'models' => 'Modellar',
        'recipients' => 'Qabul qiluvchilar',
        'recipient_name' => 'Nomi',
        'role' => 'Rol',
        'country' => 'Mamlakat (ISO kodi)',
        'international_transfers' => 'YIH dan tashqariga uzatish',
        'international' => 'YIH dan tashqarida',
        'mechanism' => 'Uzatish mexanizmi (V bob)',
        'retention' => 'O\'chirish muddatlari',
        'security_measures' => 'Xavfsizlik choralari (32-modda)',
    ],

    'placeholders' => [
        'data_subjects' => 'mijozlar, xodimlar...',
    ],

    'help' => [
        'data_categories' => 'Modelda #[PersonalData] bilan e\'lon qilinmagan ma\'lumotlar.',
        'models' => 'Ushbu modellarda e\'lon qilingan shaxsiy ma\'lumotlar reyestrga kiradi.',
    ],

    'legal_basis' => [
        'consent' => 'Rozilik (6(1)(a)-modda)',
        'contract' => 'Shartnoma (6(1)(b)-modda)',
        'legal_obligation' => 'Huquqiy majburiyat (6(1)(c)-modda)',
        'vital_interests' => 'Hayotiy manfaatlar (6(1)(d)-modda)',
        'public_task' => 'Ommaviy vazifa (6(1)(e)-modda)',
        'legitimate_interests' => 'Qonuniy manfaatlar (6(1)(f)-modda)',
    ],

    'roles' => [
        'processor' => 'Ishlovchi',
        'controller' => 'Nazoratchi',
        'public_authority' => 'Davlat organi',
    ],

    'mechanisms' => [
        'adequacy' => 'Adekvatlik qarori (45-modda)',
        'standard_clauses' => 'Standart shartnoma bandlari (46(2)(c)-modda)',
        'binding_corporate_rules' => 'Majburiy korporativ qoidalar (47-modda)',
        'codes_certification' => 'Xulq-atvor kodeksi yoki sertifikatlash (46(2)(e)-(f)-modda)',
        'derogation' => 'Muayyan holat uchun istisno (49-modda)',
    ],

    'actions' => [
        'export' => 'Yozuvlarni eksport qilish (JSON)',
    ],
];
