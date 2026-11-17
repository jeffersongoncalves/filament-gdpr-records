<?php

return [
    'resource' => [
        'label' => 'عملية معالجة',
        'plural_label' => 'عمليات المعالجة',
    ],

    'fields' => [
        'name' => 'الاسم',
        'purpose' => 'الغرض',
        'legal_basis' => 'الأساس القانوني',
        'data_subjects' => 'أصحاب البيانات',
        'data_categories' => 'فئات بيانات أخرى',
        'models' => 'النماذج',
        'recipients' => 'المستلمون',
        'recipient_name' => 'الاسم',
        'role' => 'الدور',
        'country' => 'البلد (رمز ISO)',
        'international_transfers' => 'عمليات النقل خارج المنطقة الاقتصادية الأوروبية',
        'international' => 'خارج المنطقة الاقتصادية الأوروبية',
        'mechanism' => 'آلية النقل (الفصل الخامس)',
        'retention' => 'المهل الزمنية للمحو',
        'security_measures' => 'تدابير الأمان (المادة 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'العملاء، الموظفون...',
    ],

    'help' => [
        'data_categories' => 'بيانات غير معلنة في نموذج باستخدام #[PersonalData].',
        'models' => 'تدخل البيانات الشخصية المعلنة في هذه النماذج ضمن السجل.',
    ],

    'legal_basis' => [
        'consent' => 'الموافقة (المادة 6(1)(أ))',
        'contract' => 'العقد (المادة 6(1)(ب))',
        'legal_obligation' => 'الالتزام القانوني (المادة 6(1)(ج))',
        'vital_interests' => 'المصالح الحيوية (المادة 6(1)(د))',
        'public_task' => 'المهمة العامة (المادة 6(1)(هـ))',
        'legitimate_interests' => 'المصالح المشروعة (المادة 6(1)(و))',
    ],

    'roles' => [
        'processor' => 'معالج',
        'controller' => 'المتحكم',
        'public_authority' => 'سلطة عامة',
    ],

    'mechanisms' => [
        'adequacy' => 'قرار الكفاية (المادة 45)',
        'standard_clauses' => 'البنود التعاقدية القياسية (المادة 46(2)(ج))',
        'binding_corporate_rules' => 'القواعد المؤسسية الملزمة (المادة 47)',
        'codes_certification' => 'مدونة سلوك أو شهادة (المادة 46(2)(هـ)-(و))',
        'derogation' => 'استثناء لحالة محددة (المادة 49)',
    ],

    'actions' => [
        'export' => 'تصدير السجلات (JSON)',
    ],
];
