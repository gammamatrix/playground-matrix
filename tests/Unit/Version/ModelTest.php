<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Version;

use GammaMatrix\Playground\Test\Unit\App\Models\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Version\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    public const MODEL = \GammaMatrix\Playground\Matrix\Models\Version::class;

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
        'roadmap',
        'source',
        'sprint',
        'tag',
        'team',
        'ticket',
    ];
}
