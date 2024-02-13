<?php
/**
 * Playground
 */
namespace Tests\Unit\Playground\Matrix\Models\Tag;

use Tests\Unit\Playground\Matrix\Models\ModelCase;

/**
 * \Tests\Unit\Playground\Matrix\Models\Tag\ModelTest
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \Playground\Matrix\Models\Tag::class;

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
        'team',
        'ticket',
        'version',
    ];
}
