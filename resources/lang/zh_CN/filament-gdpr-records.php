<?php

return [
    'resource' => [
        'label' => '处理活动',
        'plural_label' => '处理活动',
    ],

    'fields' => [
        'name' => '名称',
        'purpose' => '目的',
        'legal_basis' => '合法性基础',
        'data_subjects' => '数据主体',
        'data_categories' => '其他数据类别',
        'models' => '模型',
        'recipients' => '接收方',
        'recipient_name' => '名称',
        'role' => '角色',
        'country' => '国家（ISO 代码）',
        'international_transfers' => '向欧洲经济区以外的传输',
        'international' => '欧洲经济区以外',
        'mechanism' => '传输机制（第五章）',
        'retention' => '删除期限',
        'security_measures' => '安全措施（第32条）',
    ],

    'placeholders' => [
        'data_subjects' => '客户、员工…',
    ],

    'help' => [
        'data_categories' => '未通过 #[PersonalData] 在模型中声明的数据。',
        'models' => '这些模型中声明的个人数据会纳入记录。',
    ],

    'legal_basis' => [
        'consent' => '同意（第6(1)(a)条）',
        'contract' => '合同（第6(1)(b)条）',
        'legal_obligation' => '法定义务（第6(1)(c)条）',
        'vital_interests' => '重大利益（第6(1)(d)条）',
        'public_task' => '公共任务（第6(1)(e)条）',
        'legitimate_interests' => '正当利益（第6(1)(f)条）',
    ],

    'roles' => [
        'processor' => '受托处理者',
        'controller' => '控制者',
        'public_authority' => '公共机构',
    ],

    'mechanisms' => [
        'adequacy' => '充分性决定（第45条）',
        'standard_clauses' => '标准合同条款（第46(2)(c)条）',
        'binding_corporate_rules' => '有约束力的公司规则（第47条）',
        'codes_certification' => '行为准则或认证（第46(2)(e)-(f)条）',
        'derogation' => '特定情况下的例外（第49条）',
    ],

    'actions' => [
        'export' => '导出记录（JSON）',
    ],
];
