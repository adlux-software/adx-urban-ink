<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings Path
    |--------------------------------------------------------------------------
    |
    | Path to the JSON file where settings are stored.
    |
    */

    'path' => storage_path('app/settings.json'),

    /*
    |--------------------------------------------------------------------------
    | Sidebar Label
    |--------------------------------------------------------------------------
    |
    | The text that Nova displays for this tool in the navigation sidebar.
    |
    */

    'sidebar-label' => 'Business',

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The browser/meta page title for the tool.
    |
    */

    'title' => 'Business',

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | The good stuff :). Each setting defined here will render a field in the
    | tool. The only required key is `key`, other available keys include `type`,
    | `label`, `help`, `placeholder`, `language`, and `panel`.
    |
    */

    'settings' => [

        [
            'key' => 'business_address',
            'type' => 'textarea',
            'label' => 'Address',
            'panel' => 'Business',
        ],

        [
            'key' => 'business_google_map',
            'label' => 'Google Map',
            'type' => 'code',
            'panel' => 'Contact',
            'help' => 'Google maps iframe URL.',
            'placeholder' => 'Google maps',
        ],

        [
            'key' => 'business_phone_1',
            'label' => 'Phone 1',
            'panel' => 'Business',
        ],

        [
            'key' => 'business_phone_2',
            'label' => 'Phone 2',
            'panel' => 'Business',
        ],

        [
            'key' => 'business_email',
            'label' => 'Email',
            'panel' => 'Business',
        ],

        [
            'key' => 'business_whatsapp',
            'label' => 'WhatsApp',
            'panel' => 'Business',
        ],

        [
            'key' => 'twitter_url',
            'label' => 'Twitter Profile',
            'panel' => 'Social',
        ],

        [
            'key' => 'instagram_url',
            'label' => 'Instagram Profile',
            'panel' => 'Social',
        ],

        [
            'key' => 'facebook_url',
            'label' => 'Facebook Profile',
            'panel' => 'Social',
        ],

        [
            'key' => 'linkedin_url',
            'label' => 'LinkedIn Profile',
            'panel' => 'Social',
        ],

        [
            'key' => 'pinterest_url',
            'label' => 'Pinterest Profile',
            'panel' => 'Social',
        ],

//        [
//            'key' => 'welcome',
//            'label' => 'Welcome Message',
//            'type' => 'textarea',
//            'help' => 'Greeting for new users on their first login.',
//        ],

//        [
//            'key' => 'theme',
//            'label' => 'Default App Theme',
//            'type' => 'select',
//            'options' => [
//                'dark' => 'Dark theme',
//                'light' => 'Light theme',
//            ],
//        ],

    ],

];
