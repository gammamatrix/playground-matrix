<?php
/**
 * Playground
 */

declare(strict_types=1);

/**
 *  Configuration and Environment Variables
 */
return [

    /*
    |--------------------------------------------------------------------------
    | About Information
    |--------------------------------------------------------------------------
    |
    | By default, information will be displayed about this package when using:
    |
    | `artisan about`
    |
    */

    'about' => (bool) env('PLAYGROUND_MATRIX_ABOUT', true),

    /*
    |--------------------------------------------------------------------------
    | Loading
    |--------------------------------------------------------------------------
    |
    | By default, migrations are disabled.
    |
    */

    'load' => [
        'migrations' => (bool) env('PLAYGROUND_MATRIX_LOAD_MIGRATIONS', false),
    ],
];
