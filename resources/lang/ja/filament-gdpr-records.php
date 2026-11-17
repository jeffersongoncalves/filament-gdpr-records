<?php

return [
    'resource' => [
        'label' => '処理活動',
        'plural_label' => '処理活動',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'legal_basis' => '適法性の根拠',
        'data_subjects' => 'データ主体',
        'data_categories' => 'その他のデータカテゴリ',
        'models' => 'モデル',
        'recipients' => '提供先',
        'recipient_name' => '名称',
        'role' => '役割',
        'country' => '国（ISO コード）',
        'international_transfers' => 'EEA域外への移転',
        'international' => 'EEA域外',
        'mechanism' => '移転の仕組み（第5章）',
        'retention' => '消去の期限',
        'security_measures' => 'セキュリティ対策（第32条）',
    ],

    'placeholders' => [
        'data_subjects' => '顧客、従業員…',
    ],

    'help' => [
        'data_categories' => '#[PersonalData] でモデルに申告されていないデータ。',
        'models' => 'これらのモデルで申告された個人データが記録に含まれます。',
    ],

    'legal_basis' => [
        'consent' => '同意（第6条第1項(a)）',
        'contract' => '契約（第6条第1項(b)）',
        'legal_obligation' => '法的義務（第6条第1項(c)）',
        'vital_interests' => '生命に関する利益（第6条第1項(d)）',
        'public_task' => '公的任務（第6条第1項(e)）',
        'legitimate_interests' => '正当な利益（第6条第1項(f)）',
    ],

    'roles' => [
        'processor' => '処理者',
        'controller' => '管理者',
        'public_authority' => '公的機関',
    ],

    'mechanisms' => [
        'adequacy' => '十分性認定（第45条）',
        'standard_clauses' => '標準契約条項（第46条第2項(c)）',
        'binding_corporate_rules' => '拘束的企業準則（第47条）',
        'codes_certification' => '行動規範または認証（第46条第2項(e)-(f)）',
        'derogation' => '特定の状況における例外（第49条）',
    ],

    'actions' => [
        'export' => '記録をエクスポート（JSON）',
    ],
];
