<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Brand
    |--------------------------------------------------------------------------
    |
    | This value is the name of your admin panel that will be displayed in the
    | navigation and at the top of your Filament pages.
    |
    */

    'brand' => env('APP_NAME', 'Al TENEIJI CRM'),

    /*
    |--------------------------------------------------------------------------
    | Colors
    |--------------------------------------------------------------------------
    |
    | Here you may customize the primary and secondary colors of your
    | Filament admin panel.
    |
    */

    'colors' => [
        'primary' => '#6366F1', // Indigo
        'secondary' => '#A855F7', // Purple
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | This is the storage disk Filament will use to store media. You may
    | use any disk defined in `config/filesystems.php`.
    |
    */

    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    |
    | You may customize the footer content for your admin panel here.
    |
    */

    'footer' => [
        'content' => '© ' . date('Y') . ' Al TENEIJI CRM. All rights reserved.',
    ],

    /*
    |--------------------------------------------------------------------------
    | Widgets
    |--------------------------------------------------------------------------
    |
    | Define which widgets should be loaded on the dashboard.
    |
    */

    'widgets' => [
        // \App\Filament\Widgets\YourWidget::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | Enable or disable real-time notifications using broadcasting.
    |
    */

    'broadcasting' => [
        // 'echo' => [
        //     'broadcaster' => 'pusher',
        //     'key' => env('VITE_PUSHER_APP_KEY'),
        //     'cluster' => env('VITE_PUSHER_APP_CLUSTER'),
        //     'forceTLS' => true,
        // ],
    ],

];
