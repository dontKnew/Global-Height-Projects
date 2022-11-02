<?php

$routes = [
        // Guest urls
        'base'                  =>  $config['base_url'],
        'js'                    =>  $config['base_url'] . '/assets/js',
        'css'                   =>  $config['base_url'] . '/assets/css',
        'images'                =>  $config['base_url'] . '/assets/images',
        'assets'                =>  $config['base_url'] . '/assets',
        'error404'              =>  $config['base_url'] . '/error404.html',
        'join'                  =>  $config['base_url'] . '/join',
        'login'                 =>  $config['base_url'] . '/login',
        'faq'                   =>  $config['base_url'] . '/faq',
        'tos'                   =>  $config['base_url'] . '/terms-of-services',
        'privacy_policy'        =>  $config['base_url'] . '/privacy-policy',
        'about_us'              =>  $config['base_url'] . '/about-us',
        'contact_us_base'       =>  $config['base_url'] . '/contact-us',
        'contact_us'            =>  $config['base_url'] . '/contact-us',
        'forgot_password'       =>  $config['base_url'] . '/forgot-password',
        'reset_password'        =>  $config['base_url'] . '/reset-password',
        'activate_account'      =>  $config['base_url'] . '/activate',
        'logout'                =>  $config['base_url'] . '/logout',
        'subscribe'             =>  $config['base_url'] . '/subscribe',
        'blog'                  =>  $config['base_url'] . '/articles',
        'news_events'           =>  $config['base_url'] . '/news-and-events',

        // Member pages
        'mypage'                =>  $config['base_url'] . '/profile',
        'settings'              => $config['base_url'] . '/settings',

        // Ajax pages
        'signup'                =>  $config['base_url'] . '/register',
        'login'                 =>  $config['base_url'] . '/login',
        'forgot_password'       =>  $config['base_url'] . '/forgot-password',
        'logout'                =>  $config['base_url'] . '/logout',
        'upload_data'           =>  $config['base_url'] . '/upload-data',

        // Admin urls
        'admin_assets'          =>  $config['base_url'] . '/assets/admin',
        'admin_base'            =>  $config['base_url'] . '/admin',
        'admin_login'           =>  $config['base_url'] . '/admin/login.php',
        'admin_dashboard'       =>  $config['base_url'] . '/admin/dashboard.php',
        'admin_logout'          =>  $config['base_url'] . '/admin/logout.php',
        'admin_reset_password'  =>  $config['base_url'] . '/admin/reset_password.php',
        'admin_forgot_password' =>  $config['base_url'] . '/admin/forgot_password.php',
        'admin_site_settings'   =>  $config['base_url'] . '/admin/site_settings.php',
        'admin_list_subscriber' =>  $config['base_url'] . '/admin/list_subscriber.php',
        'admin_list_pages'      =>  $config['base_url'] . '/admin/list_pages.php',
        'admin_create_page'     =>  $config['base_url'] . '/admin/create_page.php',
        'admin_list_blogs'      =>  $config['base_url'] . '/admin/list_blog.php',
        'admin_list_blog'       =>  $config['base_url'] . '/admin/list_blog.php',
        'admin_create_blog'     =>  $config['base_url'] . '/admin/create_blog.php',
        'admin_list_news'       =>  $config['base_url'] . '/admin/list_news.php',
        'admin_create_news'     =>  $config['base_url'] . '/admin/create_news.php',
    ];
