<?php

return [
    'resource' => [
        'label' => 'İşleme faaliyeti',
        'plural_label' => 'İşleme faaliyetleri',
    ],

    'fields' => [
        'name' => 'Ad',
        'purpose' => 'Amaç',
        'legal_basis' => 'Hukuki dayanak',
        'data_subjects' => 'İlgili kişiler',
        'data_categories' => 'Diğer veri kategorileri',
        'models' => 'Modeller',
        'recipients' => 'Alıcılar',
        'recipient_name' => 'Ad',
        'role' => 'Rol',
        'country' => 'Ülke (ISO kodu)',
        'international_transfers' => 'AEA dışına aktarımlar',
        'international' => 'AEA dışında',
        'mechanism' => 'Aktarım mekanizması (Bölüm V)',
        'retention' => 'Silme süreleri',
        'security_measures' => 'Güvenlik önlemleri (md. 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'müşteriler, çalışanlar...',
    ],

    'help' => [
        'data_categories' => 'Bir modelde #[PersonalData] ile beyan edilmemiş veriler.',
        'models' => 'Bu modellerde beyan edilen kişisel veriler kayda dahil edilir.',
    ],

    'legal_basis' => [
        'consent' => 'Rıza (md. 6(1)(a))',
        'contract' => 'Sözleşme (md. 6(1)(b))',
        'legal_obligation' => 'Hukuki yükümlülük (md. 6(1)(c))',
        'vital_interests' => 'Hayati menfaatler (md. 6(1)(d))',
        'public_task' => 'Kamu görevi (md. 6(1)(e))',
        'legitimate_interests' => 'Meşru menfaatler (md. 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'Veri işleyen',
        'controller' => 'Veri sorumlusu',
        'public_authority' => 'Kamu kurumu',
    ],

    'mechanisms' => [
        'adequacy' => 'Yeterlilik kararı (md. 45)',
        'standard_clauses' => 'Standart sözleşme maddeleri (md. 46(2)(c))',
        'binding_corporate_rules' => 'Bağlayıcı şirket kuralları (md. 47)',
        'codes_certification' => 'Davranış kuralları veya sertifikasyon (md. 46(2)(e)-(f))',
        'derogation' => 'Özel durum için istisna (md. 49)',
    ],

    'actions' => [
        'export' => 'Kayıtları dışa aktar (JSON)',
    ],
];
