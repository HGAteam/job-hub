<?php
return [
    // 'documentation' => array(
    //     // Apply for all documentation pages
    //     '*' => array(
    //         // Layout
    //         'layout' => array(
    //             // Aside
    //             'aside' => array(
    //                 'display'  => true, // Display aside
    //                 'theme'    => 'light', // Set aside theme(dark|light)
    //                 'minimize' => false, // Allow aside minimize toggle
    //                 'menu'     => 'documentation' // Set aside menu type(main|documentation)
    //             ),

    //             'header' => array(
    //                 'left' => 'page-title',
    //             ),

    //             'toolbar' => array(
    //                 'display' => false,
    //             ),

    //             'page-title' => array(
    //                 'layout'            => 'documentation',
    //                 'description'       => false,
    //                 'responsive'        => true,
    //                 'responsive-target' => '#kt_header_nav' // Responsive target selector
    //             ),
    //         ),
    //     ),
    // ),
    ////HOME
    'home' => [
        'title' => 'Dashboard',
        'description' => 'Welcome to HGA Quick Boot, from here you can view your website statistics',
        'view' => 'index',
        'layout' => [
            'page-title' => [
                'description' => true,
                'breadcrumb' => false,
            ],
        ],

        // Multimedia
        'multimedia' => [
            'library' => [
                'title' => 'Library',
                'description' => 'From here you can view all the files on your website and delete or change details.',
                'assets' => [
                    'custom' => [
                        'css' => [
                            'plugins/custom/datatables/datatables.bundle.css',
                        ],
                        'js' => [
                            'plugins/custom/datatables/datatables.bundle.js',
                            'js/custom/library/table.js',
                        ],
                    ],
                ],

                'create' => [
                    'title' => 'Add New',
                    'description' => 'Add images, videos and documents to be used in your pages',
                    'assets' => [
                        'custom' => [
                            'css' => [],
                            'js' => [
                                // 'js/custom/library/add.js',
                            ],
                        ],
                    ],
                ]
            ],
        ],

        'shop' => [

            // Products
            'products' => [
                        'title' => 'Products',
                        'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/catalog/products.js'
                                ],
                            ],
                        ],
                // Add Products
                'add-product' => [
                    'title' => 'Add Product',
                    'description' => 'Add Product',
                    'assets' => [
                        'custom' => [
                            'css' => ['plugins/custom/datatables/datatables.bundle.css'],
                            'js' => [
                                'plugins/custom/datatables/datatables.bundle.js',
                                'plugins/custom/formrepeater/formrepeater.bundle.js',
                                'js/custom/apps/ecommerce/catalog/save-product.js'
                            ],
                        ],
                    ],
                ],
                // Categories
                'categories' => [
                    'title' => 'Categories',
                    'assets' => [
                        'custom' => [
                            'css' => [
                                'plugins/custom/datatables/datatables.bundle.css',
                            ],
                            'js' => ['plugins/custom/datatables/datatables.bundle.js'],
                        ],
                    ],
                    'add-category' => [
                            'title' => 'Add Category',
                            'assets' => [
                                'custom' => [
                                    'css' => ['plugins/custom/datatables/datatables.bundle.css'],
                                    'js' => [
                                        'plugins/custom/datatables/datatables.bundle.js',
                                        'plugins/custom/formrepeater/formrepeater.bundle.js',
                                        'js/custom/apps/ecommerce/catalog/save-category.js'
                                    ],
                                ],
                            ],
                    ],
                ],
            ],

            // Orders
            'sales' => [
                'orders' => [
                            'title' => 'Orders',
                            'assets' => [
                                'custom' => [
                                    'css' => [
                                        'plugins/custom/datatables/datatables.bundle.css',
                                    ],
                                    'js' => [
                                        'plugins/custom/datatables/datatables.bundle.js',
                                        'js/custom/apps/ecommerce/sales/listing.js'
                                    ],
                                ],
                            ],
                    'add-order' => [
                            'title' => 'Add Order',
                            'assets' => [
                                'custom' => [
                                    'css' => ['plugins/custom/datatables/datatables.bundle.css'],
                                    'js' => [
                                        'plugins/custom/datatables/datatables.bundle.js',
                                        'plugins/custom/formrepeater/formrepeater.bundle.js',
                                        'js/custom/apps/ecommerce/sales/save-order.js'
                                    ],
                                ],
                            ],
                    ],
                ],
            ],
            // Customers
            'customers' => [
                        'title' => 'Customers',
                        'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/customers/listing/listing.js',
                                    'js/custom/apps/ecommerce/customers/listing/add.js',
                                    'js/custom/apps/ecommerce/customers/listing/export.js',
                                ],
                            ],
                        ],
            ],

            // Shop Reports
            'reports' => [
                'products-viewed' => [
                        'title' => 'Products Viewed',
                        'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/reports/views/views.js',
                                ],
                            ],
                        ],
                ],
                'sales' => [
                    'title' => 'Sales',
                    'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/reports/sales/sales.js'
                                ],
                            ],
                        ],
                ],
                'returns' => [
                    'title' => 'Returns',
                    'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/reports/returns/returns.js'
                                ],
                            ],
                        ],
                ],
                'customer-orders' => [
                    'title' => 'Customer Orders',
                    'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/reports/customer-orders/customer-orders.js'
                                ],
                            ],
                        ],
                ],
                'shipping' => [
                    'title' => 'Shipping',
                    'assets' => [
                            'custom' => [
                                'css' => [
                                    'plugins/custom/datatables/datatables.bundle.css',
                                ],
                                'js' => [
                                    'plugins/custom/datatables/datatables.bundle.js',
                                    'js/custom/apps/ecommerce/reports/shipping/shipping.js'
                                ],
                            ],
                        ],
                ],
            ],

            'settings' => [
                'title' => 'Settings',
                'assets' => [
                    'custom' => [
                        'css' => [
                            'plugins/custom/datatables/datatables.bundle.css'
                        ],
                        'js' => [
                            'plugins/custom/datatables/datatables.bundle.js',
                            'js/custom/apps/ecommerce/settings/settings.js'
                        ],
                    ],
                ],
            ],
        ],
        // User Manager
        'user-manager' => [
            'title' => 'User Manager',
            'description' => 'HGA Quick Boot User Manager, from here you can view the information of all users (roles and permissions associated with each one)',
            'layout' => [
                'page-title' => [
                    'description' => true,
                    'breadcrumb' => false,
                ],
            ],
            'assets' => [
                'custom' => [
                    'css' => [
                        'plugins/custom/datatables/datatables.bundle.css',
                    ],
                    'js' => [
                        'plugins/custom/datatables/datatables.bundle.js',
                        'js/custom/user-manager/users/list/table.js',
                        'js/custom/user-manager/users/list/add.js',
                        'js/custom/user-manager/users/list/export-users.js',
                    ],
                ],
            ],
            'profile' => [
                'overview' => [
                    '*'  => [
                        'title' => 'User Overview',
                    ],
                ],
                'settings'  => [
                        '*'  => [
                        'title' => 'Edit User',
                        'assets' => [
                            'custom' => [
                                'js' => [
                                    'js/custom/user-manager/users/view/signin-methods.js',
                                    'js/custom/user-manager/users/view/profile-details.js',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'add-new'  => [
                'title' => 'Add New User',
                'description' => 'Create a new system user, assign roles and allow them limited access to your system',
                'assets' => [
                    'custom' => [
                        'css' => [],
                        'js' => [],
                    ],
                ],
            ],
            'roles'  => [
                'title' => 'Roles',
                'description' => 'Create a new system user, assign roles and allow them limited access to your system',
                'assets' => [
                    'custom' => [
                        'css' => [
                            'plugins/custom/datatables/datatables.bundle.css',
                        ],
                        'js' => [
                            'plugins/custom/datatables/datatables.bundle.js',
                            'js/custom/user-manager/roles/list/cards.js',
                            'js/custom/user-manager/roles/list/add.js',
		                    'js/custom/user-manager/roles/list/update-role.js',
                        ],
                    ],
                ],
            ],
            'permissions'  => [
                'title' => 'Permissions',
                'description' => 'Create a new system user, assign roles and allow them limited access to your system',
                'assets' => [
                    'custom' => [
                        'css' => [
                            'plugins/custom/datatables/datatables.bundle.css',
                        ],
                        'js' => [
                            'plugins/custom/datatables/datatables.bundle.js',
                            'js/custom/user-manager/permissions/list.js',
                            'js/custom/user-manager/permissions/add-permission.js',
                            'js/custom/user-manager/permissions/update-permission.js',
                        ],
                    ],
                ],
            ],
        ],

        'settings'  => [
            'title' => 'System Settings',
                'description' => 'You can edit the information on your website',
                'assets' => [
                'custom' => [
                    'js' => [
                    ],
                ],
            ],
        ],
        // Log
        'monitor' => [
            'audit' => [
                'title' => 'Audit Log',
                'assets' => [
                    'custom' => [
                        'css' => [
                            'plugins/custom/datatables/datatables.bundle.css',
                        ],
                        'js' => ['plugins/custom/datatables/datatables.bundle.js'],
                    ],
                ],
            ],
            'system' => [
                'title' => 'System Log',
                'assets' => [
                    'custom' => [
                        'css' => [
                            'plugins/custom/datatables/datatables.bundle.css',
                        ],
                        'js' => ['plugins/custom/datatables/datatables.bundle.js'],
                    ],
                ],
            ],
        ],

        // Account
        'account' => [
            'overview' => [
                'title' => 'Account Overview',
                'description' => 'Summary of your system user information',
                'view' => 'account/overview/overview',
                'assets' => [
                    'custom' => [
                        'js' => ['js/custom/widgets.js'],
                    ],
                ],
            ],

            'settings' => [
                'title' => 'Account Settings',
                'description' => 'Manage your system user data',
                'assets' => [
                    'custom' => [
                        'js' => [
                            'js/custom/account/settings/profile-details.js',
                            'js/custom/account/settings/signin-methods.js',
                            'js/custom/modals/two-factor-authentication.js',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
