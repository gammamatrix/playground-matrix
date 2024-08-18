<?php
/**
 * Playground
 */

declare(strict_types=1);

/**
 * Playground: Matrix Configuration and Environment Variables
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

    /*
    |--------------------------------------------------------------------------
    | Projects and tickets
    |--------------------------------------------------------------------------
    |
    | The default key to use for tickets.
    | This is not case-sensitive, queries use LIKE.
    |
    | Examples: GH, TICKET, SomeThing, Dashes-are-OK
    | - emojis technically should work, but it may be a bad UX in the UI.
    */

    'keys' => [
        'default' => env('PLAYGROUND_MATRIX_KEYS_DEFAULT', ''),

        'allow_empty' => (bool) env('PLAYGROUND_MATRIX_KEYS_ALLOW_EMPTY', true),
    ],

];
