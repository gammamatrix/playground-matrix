<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Roadmap;

use GammaMatrix\Playground\Test\Unit\App\Models\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Roadmap\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    public const MODEL = \GammaMatrix\Playground\Matrix\Models\Roadmap::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator',
        'modifier',
        'owner',
        'parent',
        'backlog',
        'board',
        'epic',
        'flow',
        'milestone',
        'project',
        'release',
        'source',
        'sprint',
        'tag',
        'team',
        'ticket',
        'version',
    ];
}
