<?php
/**
 * GammaMatrix
 *
 */

namespace Tests\Feature\GammaMatrix\Playground\Matrix\Flow;

use Tests\Feature\GammaMatrix\Playground\Matrix\ModelCase;

/**
 * \Tests\Feature\GammaMatrix\Playground\Matrix\Flow\ModelTest
 *
 */
class ModelTest extends ModelCase
{
    protected string $modelClass = \GammaMatrix\Playground\Matrix\Models\Flow::class;

    protected bool $hasRelationships = true;

    protected array $hasOne = [
        'creator' => [
            'key'        => 'created_by_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Test\Models\User::class,
        ],
        'modifier' => [
            'key'        => 'modified_by_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Test\Models\User::class,
        ],
        'owner' => [
            'key'        => 'owned_by_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Test\Models\User::class,
        ],
        'parent' => [
            'key'        => 'parent_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Flow::class,
        ],
        'note' => [
            'key'        => 'note_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Note::class,
        ],
        'tag' => [
            'key'        => 'tag_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Tag::class,
        ],
        'team' => [
            'key'        => 'team_id',
            'rule'       => 'create',
            'modelClass' => \GammaMatrix\Playground\Matrix\Models\Team::class,
        ],
    ];
}
