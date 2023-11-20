<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Flow;

use GammaMatrix\Playground\Test\Unit\App\Models\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Flow\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    public const MODEL = \GammaMatrix\Playground\Matrix\Models\Flow::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'note',
        'tag',
        'team',
    ];
}
