<?php

declare(strict_types=1);

return [
    'about' => (bool) env('PLAYGROUND_MATRIX_ABOUT', true),
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_MATRIX_LOAD_MIGRATIONS', false),
    ],
];
