<?php

return [
    'header_top_menu' => [
        'type' => 'toggle',
        'label' => 'Show header top menu',
        'name'=> 'header_top_menu',
        'default' => get_option('header_top_menu', $params['id']),
    ],
    'search_bar' => [
        'type' => 'toggle',
        'name'=> 'search_bar',
        'label' => 'Search',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('search_bar', $params['id']),
    ],
    'shopping_cart' => [
        'type' => 'toggle',
        'name'=> 'shopping_cart',
        'label' => 'Shopping cart',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('shopping_cart', $params['id']),
    ],
    'contact_us_link' => [
        'type' => 'toggle',
        'name'=> 'contact_us_link',
        'label' => 'Contact us link',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('contact_us_link', $params['id']),
    ],
    'header_socials' => [
        'type' => 'toggle',
        'name'=> 'header_socials',
        'label' => 'Header socials',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('header_socials', $params['id']),
    ],
    'phone_text' => [
        'type' => 'toggle',
        'name'=> 'phone_text',
        'label' => 'Phone text',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('phone_text', $params['id']),
    ],
    'phone_text_value' => [
        'type' => 'text',
        'name'=> 'phone_text_value',
        //'label' => 'Phone text value',
        'show_when'=>['header_top_menu', 'phone_text'],
        'default' => get_option('phone_text_value', $params['id']),
    ],
    'profile_link' => [
        'type' => 'toggle',
        'name'=> 'profile_link',
        'label' => 'Profile link',
        'show_when'=>['header_top_menu'],
        'default' => get_option('profile_link', $params['id']),
    ],
    'sticky_nav' => [
        'type' => 'toggle',
        'name'=> 'sticky_nav',
        'label' => 'Sticky nav',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('sticky_nav', $params['id']),
    ],
    'multilanguage' => [
        'type' => 'toggle',
        'name'=> 'multilanguage',
        'label' => 'Multilanguage',
        'show_when'=> ['header_top_menu'],
        'default' => get_option('multilanguage', $params['id']),
    ]
];
