<?php

return [
    'resource' => [
        'label' => 'Emal əməliyyatı',
        'plural_label' => 'Emal əməliyyatları',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Məqsəd',
        'legal_basis' => 'Hüquqi əsas',
        'data_subjects' => 'Məlumat subyektləri',
        'data_categories' => 'Digər məlumat kateqoriyaları',
        'models' => 'Modellər',
        'recipients' => 'Alıcılar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'country' => 'Ölkə (ISO kodu)',
        'international_transfers' => 'AİZ-dən kənar ötürmələr',
        'international' => 'AİZ-dən kənar',
        'mechanism' => 'Ötürmə mexanizmi (V fəsil)',
        'retention' => 'Silinmə müddətləri',
        'security_measures' => 'Təhlükəsizlik tədbirləri (maddə 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'müştərilər, işçilər...',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] ilə modeldə elan edilməmiş məlumatlar.',
        'models' => 'Bu modellərdə elan edilmiş şəxsi məlumatlar reyestrə daxil olur.',
    ],

    'legal_basis' => [
        'consent' => 'Razılıq (maddə 6(1)(a))',
        'contract' => 'Müqavilə (maddə 6(1)(b))',
        'legal_obligation' => 'Hüquqi öhdəlik (maddə 6(1)(c))',
        'vital_interests' => 'Həyati maraqlar (maddə 6(1)(d))',
        'public_task' => 'İctimai vəzifə (maddə 6(1)(e))',
        'legitimate_interests' => 'Qanuni maraqlar (maddə 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Emal edən',
        'controller' => 'Nəzarətçi',
        'public_authority' => 'Dövlət orqanı',
    ],

    'mechanisms' => [
        'adequacy' => 'Adekvatlıq qərarı (maddə 45)',
        'standard_clauses' => 'Standart müqavilə şərtləri (maddə 46(2)(c))',
        'binding_corporate_rules' => 'Məcburi korporativ qaydalar (maddə 47)',
        'codes_certification' => 'Davranış kodeksi və ya sertifikatlaşdırma (maddə 46(2)(e)-(f))',
        'derogation' => 'Xüsusi hal üçün istisna (maddə 49)',
    ],

    'actions' => [
        'export' => 'Qeydləri ixrac et (JSON)',
    ],
];
