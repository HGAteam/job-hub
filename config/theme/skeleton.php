<?php

return [
    'themes' => array(
        // Default Template
        'default'=> [
            "name" => "Default Theme",
            "slug" => "default",
            "description" => "This is a demo from HGA Team website, you must change this to create your own website description",
            "type" => "Business",
            "active" => false,
            'login' => true,
            'register' => false,
            "author" => "Hector Gabriel Adrían Tula",
            "version" => "0.0.1",
            "image" => "multimedia/themes/default.png",
            // Assets
            'assets' => [
                'fonts'   => [
                    'google' => [
                        'active' => false,
                        'Poppins:300,400,500,600,700&display=swap',
                     ],
                 ],
                'css'     => [
                    "theme/default/vendor/bootstrap/css/bootstrap.min.css",
                    "theme/default/vendor/fontawesome-free/css/all.min.css",
                    "theme/default/vendor/animate/animate.compat.css",
                    "theme/default/vendor/simple-line-icons/css/simple-line-icons.min.css",
                    "theme/default/vendor/owl.carousel/assets/owl.carousel.min.css",
                    "theme/default/vendor/owl.carousel/assets/owl.theme.default.min.css",
                    "theme/default/vendor/magnific-popup/magnific-popup.min.css",
                    "theme/default/vendor/bootstrap-star-rating/css/star-rating.min.css",
                    "theme/default/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css",
                    "theme/default/css/theme.css",
                    "theme/default/css/theme-elements.css",
                    "theme/default/css/theme-blog.css",
                    "theme/default/css/theme-shop.css",
                    "theme/default/css/theme/default.css",
                    "theme/default/css/skins/default.css",
                    "theme/default/css/custom.css",
                    "theme/default/vendor/modernizr/modernizr.min.js"
                ],
                'js'      => [
                    "theme/default/vendor/plugins/js/plugins.min.js",
                    "theme/default/vendor/bootstrap-star-rating/js/star-rating.min.js",
                    "theme/default/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js",
                    "theme/default/js/theme.js",
                    "theme/default/js/views/view.contact.js",
                    "theme/default/js/views/view.shop.js",
                    "theme/default/js/theme/default.js",
                    "theme/default/js/custom.js",
                    "theme/default/js/theme.init.js"
                ],
            ],
            //Layout
            'layout' => [
                'body' => [
                    'id' => false,
                    'classes' => false,
                    'styles' => false,
                    'data' => false
                ],
            ]
        ],
        // More Templates
        'jobhunt' => [
            "name" => "JobHunt",
            "slug" => "jobhunt",
            "description" => "Job Portal Template from HGATeam, This template is really Nice...",
            "type" => "JobHunt",
            "active" => true,
            'login' => true,
            'register' => true,
            "author" => "HGATeam",
            "version" => "0.0.1",
            "image" => "multimedia/themes/default.png",
            // Assets
            'assets' => [
                'fonts'   => [
                    'google' => [
                        'active' => true,
                        'Inter:wght@100;200;300;400;500;600;700;800;900&display=swap',
                     ],
                 ],
                'css'     => [
                    // Bootstrap 5
                    "theme/jobhunt/css/lib/bootstrap.min.css",
                    "theme/jobhunt/css/lib/all.min.css",
                    "theme/jobhunt/css/lib/animate.css",
                    "theme/jobhunt/css/lib/jquery.fancybox.css",
                    "theme/jobhunt/css/lib/lity.css",
                    "theme/jobhunt/css/lib/swiper.min.css",
                    // global style
                    "theme/jobhunt/css/style.css",
                ],
                'js'      => [
                    "theme/jobhunt/js/lib/jquery-3.0.0.min.js",
                    "theme/jobhunt/js/lib/jquery-migrate-3.0.0.min.js",
                    "theme/jobhunt/js/lib/bootstrap.bundle.min.js",
                    "theme/jobhunt/js/lib/wow.min.js",
                    "theme/jobhunt/js/lib/jquery.fancybox.js",
                    "theme/jobhunt/js/lib/lity.js",
                    "theme/jobhunt/js/lib/swiper.min.js",
                    "theme/jobhunt/js/lib/jquery.waypoints.min.js",
                    "theme/jobhunt/js/lib/jquery.counterup.js",
                    // "theme/jobhunt/js/lib/pace.js",
                    "theme/jobhunt/js/lib/scrollIt.min.js",
                    "theme/jobhunt/js/main.js",
                ],
            ],
            //Layout
            'layout' => [
                'body' => [
                    'id' => false,
                    'classes' => false,
                    'styles' => false,
                    'data' => false
                ],
            ]
        ],
    ),
];
