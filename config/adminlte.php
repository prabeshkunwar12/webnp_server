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
            'text'       => 'Search',         // Placeholder for the underlying input.
            'url'        => 'search', // The url used to submit the data ('#' by default).
            'method'     => 'get',           // 'get' or 'post' ('get' by default).
            'input_name' => 'search_query',      // Name for the underlying input ('adminlteSearch' by default).
            'id'         => ''   // ID attribute for the underlying input (optional).

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
            'url'  => 'admin/notifications/show',
            'icon' => 'fas fa-fw fa-users',
        ],
        [

            'text' => 'Discussion',
            'url'  => 'threads',
            'icon' => 'fas fa-fw fa-users',
        ],
        [
            'text' => 'Documentation',
            'url'  => 'aboutus',
            'icon' => 'fas fa-fw fa-users',

        ],
        [
            'text' => 'Resources',
            'url'  => 'education',
            'icon' => 'fas fa-fw fa-users',

        ],
        

    ],

];
