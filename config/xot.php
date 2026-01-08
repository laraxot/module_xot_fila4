<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Base Paths
    |--------------------------------------------------------------------------
    |
    | These constants define the base paths for different parts of the application.
    | Using these constants instead of hardcoded paths helps prevent path-related errors.
    |
    */
    'paths' => [
        'base' => '/var/www/_bases/base_quaeris_fila4_mono',
        'laravel' => '/var/www/_bases/base_quaeris_fila4_mono/laravel',
        'modules' => '/var/www/_bases/base_quaeris_fila4_mono/laravel/Modules',
        'docs' => '/var/www/_bases/base_quaeris_fila4_mono/docs',
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Paths
    |--------------------------------------------------------------------------
    |
    | These paths are automatically generated based on the base modules path
    | and should be used when referencing module-specific directories.
    |
    */
    'module_paths' => [
        'xot' => '/var/www/_bases/base_quaeris_fila4_mono/laravel/Modules/Xot',
    ],
];
