<?php
return [
    'home' => [
        'title' => 'Dashboard',
        'description' => 'Datos generales de tu sitio web',
        'view' => 'index',
        'layout' => [
            'page-title' => [
                'description' => true,
                'breadcrumb' => false,
            ],
        ],
        'assets' => [
            'custom' => [
                'js' => [],
            ],
        ],
    ],

    // Login
    'login' => [
        'title' => 'Login',
        'assets' => [
            'custom' => [
                'js' => ['js/custom/authentication/sign-in/general.js'],
            ],
        ],
        'layout' => [
            'main' => [
                'type' => 'blank', // Set blank layout
                'body' => [
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ],
            ],
        ],
    ],

    // Register
    'register' => [
        'title' => 'Register',
        'assets' => [
            'custom' => [
                'js' => ['js/custom/authentication/sign-up/general.js'],
            ],
        ],
        'layout' => [
            'main' => [
                'type' => 'blank', // Set blank layout
                'body' => [
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ],
            ],
        ],
    ],

    // Forgot Password
    'forgot-password' => [
        'title' => 'Forgot Password',
        'assets' => [
            'custom' => [
                'js' => [
                    'js/custom/authentication/password-reset/password-reset.js',
                ],
            ],
        ],
        'layout' => [
            'main' => [
                'type' => 'blank', // Set blank layout
                'body' => [
                    'class' => theme()->isDarkMode() ? '' : 'bg-body',
                ],
            ],
        ],
    ],
];
