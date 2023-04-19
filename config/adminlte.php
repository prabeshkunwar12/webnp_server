<?php

return [

    // The name displayed in the top-left corner of the admin dashboard
    'name' => 'My Project',

    // The default skin for the admin dashboard
    'skin' => 'blue',

    // Set the layout of the admin dashboard
    'layout' => 'fixed',

    // Enable or disable the right sidebar
    'right_sidebar' => false,

    // Set the right sidebar to be dark themed
    'right_sidebar_theme' => 'dark',

    // Menu items for the admin dashboard
    'menu' => [
        [
            'type'       => 'sidebar-custom-search',
            'text'       => 'search',         // Placeholder for the underlying input.
            'url'        => 'sidebar/search', // The url used to submit the data ('#' by default).
            'method'     => 'post',           // 'get' or 'post' ('get' by default).
            'input_name' => 'searchVal',      // Name for the underlying input ('adminlteSearch' by default).
            'id'         => 'sidebarSearch'   // ID attribute for the underlying input (optional).
        ],
        [
            'text' => 'Dashboard',
            'url'  => 'admin',
            'icon' => 'fas fa-fw fa-tachometer-alt',
        ],
        [
            'text' => 'Users',
            'url'  => 'admin/users',
            'icon' => 'fas fa-fw fa-users',
        ],
        [
            'text' => 'Messages',
            'url'  => 'admin/contact-messages',
            'icon' => 'fas fa-envelope',
        ],
        [
            'text' => 'Discussion',
            'url'  => 'discussion',
            'icon' => 'far fa-comments',
        ],
        [
            'text' => 'Documentation',
            'url'  => 'Documentation',
            'icon' => 'fas fa-book',
        ],
        [
            'text' => 'Resources',
            'url'  => 'education',
            'icon' => 'fas fa-folder',
        ],
        [
            'type'         => 'navbar-notification',
            'id'           => 'my-notification',      // An ID attribute (required).
            'icon'         => 'fas fa-bell',          // A font awesome icon (required).
            'icon_color'   => 'warning',              // The initial icon color (optional).
            'label'        => 0,                      // The initial label for the badge (optional).
            'label_color'  => 'danger',               // The initial badge color (optional).
            'url'          => 'notifications/show',   // The url to access all notifications/elements (required).
            'topnav_right' => true,                   // Or "topnav => true" to place on the left (required).
            'dropdown_mode'   => true,                // Enables the dropdown mode (optional).
            'dropdown_flabel' => 'All notifications', // The label for the dropdown footer link (optional).
            'update_cfg'   => [
                'url' => 'notifications/get',         // The url to periodically fetch new data (optional).
                'period' => 30,                       // The update period for get new data (in seconds, optional).
            ],
        ],
        [
            'text'    => 'Settings',
            'icon'    => 'fas fa-fw fa-cogs',
            'submenu' => [
                [
                    'text' => 'General Settings',
                    'url'  => 'admin/settings/general',
                ],
                [
                    'text' => 'Email Settings',
                    'url'  => 'admin/settings/email',
                ],
            ],
        ],
    ],

];
