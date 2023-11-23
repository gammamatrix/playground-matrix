<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Version;

use Tests\Unit\GammaMatrix\Playground\Matrix\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Version\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \GammaMatrix\Playground\Matrix\Models\Version::class;

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
