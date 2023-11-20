<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Unit\GammaMatrix\Playground\Matrix\Project;

use GammaMatrix\Playground\Test\Unit\App\Models\ModelCase;

/**
 * \Tests\Unit\GammaMatrix\Playground\Matrix\Project\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    public const MODEL = \GammaMatrix\Playground\Matrix\Models\Project::class;

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
