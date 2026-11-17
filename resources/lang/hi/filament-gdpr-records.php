<?php

return [
    'resource' => [
        'label' => 'प्रसंस्करण गतिविधि',
        'plural_label' => 'प्रसंस्करण गतिविधियाँ',
    ],

    'fields' => [
        'name' => 'नाम',
        'purpose' => 'उद्देश्य',
        'legal_basis' => 'विधिक आधार',
        'data_subjects' => 'डेटा विषय',
        'data_categories' => 'अन्य डेटा श्रेणियाँ',
        'models' => 'मॉडल',
        'recipients' => 'प्राप्तकर्ता',
        'recipient_name' => 'नाम',
        'role' => 'भूमिका',
        'country' => 'देश (ISO कोड)',
        'international_transfers' => 'ईईए के बाहर स्थानांतरण',
        'international' => 'ईईए के बाहर',
        'mechanism' => 'स्थानांतरण तंत्र (अध्याय V)',
        'retention' => 'मिटाने की समय सीमा',
        'security_measures' => 'सुरक्षा उपाय (अनुच्छेद 32)',
    ],

    'placeholders' => [
        'data_subjects' => 'ग्राहक, कर्मचारी...',
    ],

    'help' => [
        'data_categories' => 'वह डेटा जो किसी मॉडल में #[PersonalData] से घोषित नहीं है।',
        'models' => 'इन मॉडलों में घोषित व्यक्तिगत डेटा रिकॉर्ड में शामिल होता है।',
    ],

    'legal_basis' => [
        'consent' => 'सहमति (अनुच्छेद 6(1)(a))',
        'contract' => 'अनुबंध (अनुच्छेद 6(1)(b))',
        'legal_obligation' => 'विधिक दायित्व (अनुच्छेद 6(1)(c))',
        'vital_interests' => 'महत्वपूर्ण हित (अनुच्छेद 6(1)(d))',
        'public_task' => 'सार्वजनिक कार्य (अनुच्छेद 6(1)(e))',
        'legitimate_interests' => 'वैध हित (अनुच्छेद 6(1)(f))',
    ],

    'roles' => [
        'processor' => 'प्रोसेसर',
        'controller' => 'नियंत्रक',
        'public_authority' => 'सार्वजनिक प्राधिकरण',
    ],

    'mechanisms' => [
        'adequacy' => 'पर्याप्तता निर्णय (अनुच्छेद 45)',
        'standard_clauses' => 'मानक संविदात्मक खंड (अनुच्छेद 46(2)(c))',
        'binding_corporate_rules' => 'बाध्यकारी कॉर्पोरेट नियम (अनुच्छेद 47)',
        'codes_certification' => 'आचार संहिता या प्रमाणन (अनुच्छेद 46(2)(e)-(f))',
        'derogation' => 'विशिष्ट स्थिति के लिए अपवाद (अनुच्छेद 49)',
    ],

    'actions' => [
        'export' => 'रिकॉर्ड निर्यात करें (JSON)',
    ],
];
