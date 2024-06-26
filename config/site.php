<?php

return [
    'name' => env('APP_NAME'),
    'logo' => '/img/favicon.png',
    'icon' => '/img/main.png',

    'paypal_email' => 'brickhillrewritten@gmail.com',
    'paypal_sandbox' => false,

    'route_domains' => [
        'admin_site' => 'west.vextoria.com',
        'main_site' => 'vextoria.com',
        'jobs_site' => 'jobs.vextoria.com'
    ],

    'storage_url' => 'http://cdn.vextoria.com',
    'official_thumbnail' => '/img/main.png',

    'updates_forum_topic_id' => 1,
	
	'flood_time' => 60,

    'username_change_price' => 250,
    'group_creation_price' => 50,

    'daily_currency' => 10,
    'daily_currency_membership' => 25,
    'group_limit' => 10,
    'group_limit_membership' => 25,

    'donator_item_id' => 29,
    'membership_item_id' => 59,
    'email_verification_item_id' => 1,
    'fake_admin_item_id' => 0,

    'membership_name' => 'Vextoria +',
    'membership_color' => '#fff',
    'membership_bg_color' => '#f016cb',

    'renderer' => [
        'url' => 'http://server.vextoria.com',
        'key' => 'key',
        'default_filename' => 'default',
        'previews_enabled' => true
    ],

    'admin_panel_code' => '',
    'maintenance_passwords' => [
        'Vex83ey2ihd3728hd3728dh8237hd8237ed32dh38ehui32ehdBYTEISADIRTYSKID'
    ],

    'catalog_item_types' => ['home', 'hat', 'face', 'gadget', 'shirt', 'pants', 'crate', 'bundle'],
    'catalog_recent_item_types' => ['hat', 'face', 'gadget', 'crate', 'bundle'],
    'catalog_3d_view_types' => [],
    'inventory_item_types' => ['hat', 'face', 'gadget', 'shirt', 'pants', 'crate'],
    'character_editor_item_types' => ['hat', 'face', 'gadget', 'shirt', 'pants'],
    'item_thumbnails_with_padding' => ['hat', 'face', 'gadget', 'tshirt', 'shirt', 'pants', 'crate', 'bundle']
];
