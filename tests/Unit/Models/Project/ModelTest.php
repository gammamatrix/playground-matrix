<?php
/**
 * Playground
 */
namespace Tests\Unit\Playground\Matrix\Models\Project;

use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Project\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Project::class;

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
