<?php

return [
    // Main menu
    'main' => [
        // Separator
        // [
        //     'content' => '<div class="separator mx-1 py-0 my-0"></div>',
        // ],

        // Dashboard
        [
            'title' => 'Dashboard',
            'path' => 'home',
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/art/art002.svg',
                'svg-icon-2'
            ),
        ],
        //// Shop Module
        [
            'classes' => ['content' => 'pt-2 pb-2'],
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">Shop</span>',
        ],
        //// Products
        [
            'title' => 'Products',
            'role' => ['Administrator','Editor','Author'],
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/ecommerce/ecm004.svg',
                'svg-icon-2'
            ),
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'Add Product',
                        'path' => 'home/shop/products/add-product',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Add Category',
                        'path' => 'home/shop/products/categories/add-category',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Products',
                        'path' => 'home/shop/products',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Categories',
                        'path' => 'home/shop/products/categories',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],
        //// Sales
        [
            'title' => 'Sales',
            'role' => ['Administrator','Editor','Author'],
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/ecommerce/ecm001.svg',
                'svg-icon-2'
            ),
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'Orders',
                        'path' => 'home/shop/sales/orders',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Add Order',
                        'path' => 'home/shop/sales/orders/add-order',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],
        //// Customers
        [
            'title' => 'Customers',
            'role' => ['Administrator','Editor','Author'],
            'path' => 'home/shop/customers',
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/communication/com014.svg',
                'svg-icon-2'
            ),
        ],
        //// Reports
        [
            'title' => 'Reports',
            'role' => ['Administrator','Editor','Author'],
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/ecommerce/ecm008.svg',
                'svg-icon-2'
            ),
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'Products Viewed',
                        'description' => '#',
                        'path' => 'home/shop/reports/products-viewed',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Sales',
                        'description' => '#',
                        'path' => 'home/shop/reports/sales',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Returns',
                        'description' => '#',
                        'path' => 'home/shop/reports/returns',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Customer Orders',
                        'description' => '#',
                        'path' => 'home/shop/reports/customer-orders',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Shipping',
                        'description' => '#',
                        'path' => 'home/shop/reports/shipping',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],
        //// Box
        [
            'title' => 'Box',
            'role' => ['Administrator','Editor','Author'],
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/finance/fin005.svg',
                'svg-icon-2'
            ),
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'Open Box',
                        'path' => 'home/shop//open-box',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Box Expenses',
                        'path' => 'home/shop//box-expenses',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Box History',
                        'path' => 'home/shop//box-history',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Box Chart',
                        'path' => 'home/shop//box-chart',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],
        // Settings
        [
            'title' => 'Settings',
            'path' => 'home/shop/settings',
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/ecommerce/ecm009.svg',
                'svg-icon-2'
            ),
        ],

        //// Systema
        [
            'classes' => ['content' => 'pt-2 pb-2'],
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">System</span>',
        ],

        //// Multimedia
        [
            'title' => 'Multimedia',
            'role' => ['Administrator','Editor','Author'],
            'icon' => theme()->getSvgIcon(
                'dashboard/media/icons/duotune/general/gen006.svg',
                'svg-icon-2'
            ),
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'Library',
                        'path' => 'home/multimedia/library',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Add New',
                        'path' => '#',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],

        // User manager
        [
            'title' => 'User Manager',
            'path' => 'home/user-manager',
            'role' => ['Administrator'],
            'icon' => [
                'svg' => theme()->getSvgIcon(
                    'dashboard/media/icons/duotune/abstract/abs029.svg',
                    'svg-icon-2'
                ),
                'font' => '<i class="bi bi-person fs-2"></i>',
            ],
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'All Users',
                        'path' => 'home/user-manager',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Add New',
                        'path' => 'home/user-manager/add-new',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Roles',
                        'path' => 'home/user-manager/roles',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'Permissions',
                        'path' => 'home/user-manager/permissions',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],

        //// System Report
        [
            'classes' => ['content' => 'pt-2 pb-2'],
            'content' => '<span class="menu-section text-muted text-uppercase fs-8 ls-1">System Reports</span>',
        ],

        //  // Separator
        //  [
        //     'content' => '<div class="separator mx-1 my-0 py-0 d-sm-block d-md-none""></div>',
        // ],

        // System
        [
            'title' => 'Monitor',
            'role' => ['Administrator'],
            'icon' => [
                'svg' => theme()->getSvgIcon(
                    'dashboard/media/icons/duotune/general/gen025.svg',
                    'svg-icon-2'
                ),
                'font' => '<i class="bi bi-layers fs-3"></i>',
            ],
            'classes' => ['item' => 'menu-accordion'],
            'attributes' => [
                'data-kt-menu-trigger' => 'click',
            ],
            'sub' => [
                'class' => 'menu-sub-accordion menu-active-bg',
                'items' => [
                    [
                        'title' => 'Audit Log',
                        'path' => 'home/monitor/audit',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                    [
                        'title' => 'System Log',
                        'path' => 'home/monitor/system',
                        'bullet' => '<span class="bullet bullet-dot"></span>',
                    ],
                ],
            ],
        ],
    ],
];
