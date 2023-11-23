<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Milestone;

use Tests\Unit\GammaMatrix\Playground\Matrix\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Milestone\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \GammaMatrix\Playground\Matrix\Models\Milestone::class;

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
        'project',
        'release',
        'roadmap',
        'source',
        'sprint',
        'tag',
        'team',
        'ticket',
        'version',
    ];
}
