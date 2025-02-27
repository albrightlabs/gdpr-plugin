<?php return [
    'plugin' => [
        'name' => 'GDPR and ePrivacy',
        'description' => 'Make your website GDPR and ePrivacy compliant',
    ],
    'common' => [
        'enabled' => 'Enabled',
        'disabled' => 'Disabled',
        'sorted' => 'Order updated successfully',
        'save_settings' => 'Save settings',
        'contact_details' => 'Contact details',
        'links' => 'Links',
    ],
    'cookie_banner' => [
        'description' => 'Displays a cookie banner',
        'message' => 'unused',
        'advanced_settings' => 'Advanced Settings',
        'decline' => 'I do not accept',
        'accept' => 'I ACCEPT',
        'include_css' => [
            'title' => 'Include CSS',
            'description' => 'Include default styles for this component',
        ],
        'include_js' => [
            'title' => 'Include JS',
            'description' => 'Include default scripts for this component',
        ],
        'update_partial' => [
            'title' => 'Partial for soft reload',
            'description' => 'This partial will be loaded when the user accepts.',
        ],
        'update_selector' => [
            'title' => 'CSS selector for soft reload',
            'description' => 'The partial will be loaded into this element.',
        ],
        'cookie_manager_page' => [
            'title' => 'Page for advanced settings',
            'description' => 'Place the cookieManager component on this page',
            'empty' => 'Without advanced settings',
        ],
    ],
    'cookie_manager' => [
        'description' => 'Displays an overview and edit form for all the cookies you have defined in the backend settings',
        'expiry' => [
            3 => 'Ask again in 3 months',
            6 => 'Ask again in 6 months',
            12 => 'Ask again in 1 year',
            24 => 'Ask again in 2 years',
            36 => 'Ask again in 3 years',
        ],
    ],
    'consent_manager' => [
        'description' => 'Includes the Klaro! Consent Manager',
        'include_assets' => [
            'title' => 'Include assets',
            'description' => 'Includes all needed JS files automatically',
        ],
        'style_prefix' => [
            'title' => 'CSS prefix',
            'description' => 'Use this css class in the Klaro! HTML markup (removes default styles)',
        ],
    ],
    'settings' => [
        'cookies' => [
            'label' => 'Cookies and Modules',
            'description' => 'Cookies and Modules Management',
        ],
        'general' => [
            'label' => 'General settings',
            'description' => 'Configure the GDPR plugin',
            'log_enabled' => [
                'label' => 'Log cookie requests',
                'comment' => 'Cookie requests to users and their decisions are logged',
            ],
            'ignore_useragents' => [
                'label' => 'Ignore User agents',
                'comment' => 'Don\'t log requests of these user agents',
            ],
        ],
        'cookie_consent' => [
            'label' => 'Cookie Consent',
            'description' => 'Configure Klaro! Manager',
            'cookie_expires_after_days' => [
                'label' => 'Cookie lifetime in days',
                'comment' => 'The user\'s settings are stored for this many days.',
            ],
            'privacy_policy' => [
                'label' => 'Privacy policy',
                'comment' => 'Relative or absolute link to your privacy policy',
            ],
            'default_application_state' => [
                'label' => 'Default application state',
                'comment' => 'Enable consent for all applications by default',
            ],
            'must_consent' => [
                'label' => 'Must consent',
                'comment' => 'Display the consent manager directly on the first page view to force a decision by the user',
            ],
            'lang' => [
                'label' => 'Language code',
                'comment' => 'You\'ll find all available codes in the Klaro! documentation',
            ],
            'tabs' => [
                'translations' => 'Translations',
                'apps' => 'Apps',
                'general' => 'General',
            ],
            'translations' => [
                'repeater' => [
                    'code' => [
                        'label' => 'Language code',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps' => [
                'repeater' => [
                    'name' => [
                        'label' => 'Name',
                        'comment' => 'A simple and short name for this app (ex. google-analytics)',
                    ],
                    'application_state' => [
                        'label' => 'Enabled by default',
                        'comment' => 'Enable this app by default. This overwrites the global setting',
                    ],
                    'required' => [
                        'label' => 'Consent is required',
                        'comment' => 'This app cannot be disabled',
                    ],
                    'opt_out' => [
                        'label' => 'Opt-out',
                        'comment' => 'The scripts of this app are loaded on first page view without the visitor giving consent.',
                    ],
                    'only_once' => [
                        'label' => 'Load script only once',
                        'comment' => 'The scripts of this app are loaded only once even if the visitor re-enables it multiple times.',
                    ],
                    'title' => [
                        'label' => 'Title',
                        'comment' => 'Display name (ex. Google Analytics)',
                    ],
                    'purposes' => [
                        'label' => 'Purposes',
                        'comment' => 'These purposes have to be translated in the translations section. (ex. analytics, user-tracking)',
                    ],
                    'cookies' => [
                        'label' => 'Cookies of this app',
                        'comment' => 'String or RegEx of cookie names. These cookies are automatically removed if the user disables this app. (ex. /^_ga_.*$/ or custom_tracker_cookie)',
                    ],
                    'callback' => [
                        'label' => 'Callback function',
                        'comment' => 'This JavaScript function is called whenever a user enables this app.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label' => 'Data Retention',
            'description' => 'Configure your data retention policies',
            'enabled' => [
                'label' => 'Cleanup enabled',
                'comment' => 'Delete old data automatically after it has expired',
            ],
            'default_keep_days' => [
                'label' => 'Delete data after days',
                'comment' => 'Valid for all registered plugins if nothing else is specified below',
            ],
            'keep_days' => [
                'label' => 'Delete data after days',
            ],
        ],
        'info' => [
            'label' => 'Info and Help',
            'description' => 'Information and Help to Setup',
            'bannerlaws_title' => 'Banner Laws Relating to each Country Location',
            'cookieconsent_title' => 'Cookie Consent User Guide',
            'cookiesmodulessetup_title' => 'Cookies and Modules Setup Example',
            'cookiesmodulesuserguide_title' => 'Cookies and Modules User Guide',
            'dataretention_title' => 'Data Retention User Guide',
            'dpolinks_title' => 'Contact Links for DPO of Most Common Cookies',
            'overallinfo_title' => 'Information about GDPR and ePrivacy',
            'index_title' => 'Welcome to OctoberCMS GDPR and ePrivacy Plugin',
        ],
    ],
    'cookie_group' => [
        'fields' => [
            'name' => 'Group name',
            'initial_status' => 'Have turned on at Start-up',
            'initial_status_comment' => 'This will set the item to be enabled at Start-up, please note ePrivacy requires many items to be turned off at default',
            'required' => 'Required for the Website to Function and Work',
            'required_comment' => 'The Cookies and/or Modules in this group are needed for the website to work properly and can therefore not be disabled by the user.',
            'slug' => 'Slug',
            'default_level' => 'This level is preselected for the user',
        ],
        'tabs' => [
            'description' => 'Description',
            'cookies' => 'Cookies',
        ],
    ],
    'cookie' => [
        'fields' => [
            'name_owner' => 'Owner',
            'name_owner_comment' => 'Owner Name of the Service e.g. Google Analytics',
            'code' => 'Code',
            'code_comment' => 'This is generated for the plugin to work (you don\'t need to touch this)',
            'intial_status' => 'This cookie is enabled by default',
            'levels' => 'Cookie levels',
            'item_details' => 'Item details',
            'purpose' => 'Purpose',
            'purpose_comment' => 'Under ePrivacy Law (Article 4, para 11 and article 13, para 1, C and para 2, F), you need to Describe the Purpose of the Use, Processing and any Notifications e.g. \'These cookies are used from AddThis social sharing widget in order to make sure you see the updated count when you share a page\'.',
            'contact_details_dpo' => 'Contact Details of Data Controller',
            'contact_details_dpo_comment' => 'Under ePrivacy Law (Article 13, Para 1, A and Recital 42), you have to give the DPO Contact Address e.g. Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention: Data Protection Officer, privacyquestions@cloudflare.com (please note the email address is optional)',
            'contact_links_dpo' => 'Contact Links of Data Controller',
            'contact_links_dpo_comment' => 'Under ePrivacy Law (Article 13, para 2, B, C and D), you need to give links for \'rights to complain to Supervisory authority and to access correct data policy\' this means linking to their Privacy Policy, Terms and Conditions, Cookie Privacy and Opt-Out Pages if they have them.',
            'contact_links_dpo_prompt' => 'Add new link',
            'contact_links' => [
                'name' => 'Anchor Text',
                'href' => 'Link Target (absolute URL)',
            ],
            'cookie_levels' => [
                'purpose_prompt' => 'Add Granular Purpose Levels',
                'purpose_label' => 'Granular Purpose Levels',
                'section1_label' => 'Helpful Tip for Granular Purpose Levels',
                'section1_comment' => 'Under ePrivacy Law (Recital 32 and Article 29 working party guidance nov 2017), Use a Granular Opt-In process with our manage levels feature. This means having an off setting, then having a basic setting, then having a more advanced setting and so on up to a full setting. An example of this could be Google Analytics where we have an Off Setting, then a basic Tracking Setting, then a basic Tracking Setting plus Plugins, then finally a full setting with everything. The number of levels depends on what you are adding.',
                'section2_label' => 'Helpful Tip for Item Details',
                'section2_comment' => 'You can list as many item details as you want, if this is for a cookie make sure you list all the Cookie Identification Names, for example Google Analytics can have 8 or more different ones different ones. Also make sure you have equal number of Name (Cookie Identification), Duration/Expiry and Type fields. To find the list of Website Cookies in Google Chrome go to Dev Tools > Application > Cookies. You can also use the website: https://cookiepedia.co.uk/ to look-up Cookies.',
                'name' => 'Name',
                'identification' => 'Name (Cookie Identification)',
                'identification_comment' => 'The Name of the of the Cookie Prefix code e.g. \'_ga\'',
                'provider' => 'Provider',
                'provider_comment' => 'Under ePrivacy Law, you need to state the website domain name. (exclude the https://, www and / at the end)',
                'purpose' => 'Purpose',
                'purpose_comment' => 'Describe the Purpose of the Use at each granular level in a single paragraph. Article 5 requires that consent is requested in a granular manner for \'specified, explicit\' purposes.',
                'expiry' => 'Duration/Expiry',
                'expiry_comment' => 'Under ePrivacy Law, you need to state how long it will be used in the user browser e.g. SESSION, 3 months, 2 years.',
                'type' => 'Type',
                'type_comment' => 'Under ePrivacy Law, you need to state what type of cookie or module is, to make things easier we have made a drop-down menu',
            ],
        ],
        'tabs' => [
            'contact' => 'Contact information',
            'levels' => 'Manage Levels',
            'provider' => 'Provider',
            'item_details' => 'Manage Item Details',
        ],
    ],
    'permissions' => [
        'manage_cookie_consent' => 'Can manage cookie consent settings',
        'manage_data_retention' => 'Can manage data retention policies',
        'manage_cookie_groups' => 'Can manage cookie groups',
        'manage_logs' => 'Can see decision logs',
    ],
    'log' => [
        'session_id' => 'Session ID',
        'visited' => 'Visited',
        'decided' => 'Decided',
        'decision' => 'Decision',
        'undecided' => 'Undecided',
        'accepted' => 'Accepted',
        'declined' => 'Declined',
        'total' => 'Total',
        'total_logged' => 'Logged requests',
        'log' => 'Cookie log',
        'log_comment' => 'Remove old log entries',
    ],
];
