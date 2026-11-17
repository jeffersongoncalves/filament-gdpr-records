<?php

return [
    'resource' => [
        'label' => 'فعالیت پردازش',
        'plural_label' => 'فعالیت‌های پردازش',
    ],

    'fields' => [
        'name' => 'نام',
        'purpose' => 'هدف',
        'legal_basis' => 'مبنای قانونی',
        'data_subjects' => 'صاحبان داده',
        'data_categories' => 'دسته‌های دیگر داده',
        'models' => 'مدل‌ها',
        'recipients' => 'دریافت‌کنندگان',
        'recipient_name' => 'نام',
        'role' => 'نقش',
        'country' => 'کشور (کد ISO)',
        'international_transfers' => 'انتقال به خارج از منطقه اقتصادی اروپا',
        'international' => 'خارج از منطقه اقتصادی اروپا',
        'mechanism' => 'سازوکار انتقال (فصل پنجم)',
        'retention' => 'مهلت‌های پاک‌سازی',
        'security_measures' => 'تدابیر امنیتی (ماده 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'مشتریان، کارکنان...',
    ],

    'help' => [
        'data_categories' => 'داده‌هایی که در یک مدل با #[PersonalData] اعلام نشده‌اند.',
        'models' => 'داده‌های شخصی اعلام‌شده در این مدل‌ها وارد ثبت می‌شوند.',
    ],

    'legal_basis' => [
        'consent' => 'رضایت (ماده 6(1)(الف))',
        'contract' => 'قرارداد (ماده 6(1)(ب))',
        'legal_obligation' => 'تعهد قانونی (ماده 6(1)(ج))',
        'vital_interests' => 'منافع حیاتی (ماده 6(1)(د))',
        'public_task' => 'وظیفه عمومی (ماده 6(1)(ه))',
        'legitimate_interests' => 'منافع مشروع (ماده 6(1)(و))',
    ],

    'roles' => [
        'processor' => 'پردازشگر',
        'controller' => 'کنترل‌کننده',
        'public_authority' => 'مرجع عمومی',
    ],

    'mechanisms' => [
        'adequacy' => 'تصمیم کفایت (ماده 45)',
        'standard_clauses' => 'بندهای قراردادی استاندارد (ماده 46(2)(ج))',
        'binding_corporate_rules' => 'قواعد الزام‌آور شرکتی (ماده 47)',
        'codes_certification' => 'آیین‌نامه رفتاری یا گواهی (ماده 46(2)(ه)-(و))',
        'derogation' => 'استثنا برای وضعیت خاص (ماده 49)',
    ],

    'actions' => [
        'export' => 'خروجی سوابق (JSON)',
    ],
];
