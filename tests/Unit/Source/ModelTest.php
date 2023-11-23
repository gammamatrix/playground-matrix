<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Source;

use Tests\Unit\GammaMatrix\Playground\Matrix\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Source\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \GammaMatrix\Playground\Matrix\Models\Source::class;

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
        'sprint',
        'tag',
        'team',
        'ticket',
        'version',
    ];
}
