<?php
/**
 * GammaMatrix
 */

namespace GammaMatrix\Playground\Matrix\Models;

use GammaMatrix\Playground\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * \GammaMatrix\Playground\Matrix\Models\Flow
 */
class Flow extends Model
{
    protected $table = 'matrix_flows';

    protected $attributes = [
        'owned_by_id' => null,
        'parent_id' => null,
        'flow_type' => null,
        'note_id' => null,
        'tag_id' => null,
        'team_id' => null,
        'content' => '',
        'summary' => '',
        'status' => 1,
        'assets' => '{}',
        'flow' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
    ];

    protected $casts = [
        'flow_type' => 'string',
        'gids' => 'integer',
        'po' => 'integer',
        'pg' => 'integer',
        'pw' => 'integer',
        'status' => 'integer',
        'rank' => 'integer',
        'size' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'start_at' => 'datetime',
        'planned_start_at' => 'datetime',
        'end_at' => 'datetime',
        'planned_end_at' => 'datetime',
        'canceled_at' => 'datetime',
        'closed_at' => 'datetime',
        'embargo_at' => 'datetime',
        'postponed_at' => 'datetime',
        'published_at' => 'datetime',
        'released_at' => 'datetime',
        'resumed_at' => 'datetime',
        'suspended_at' => 'datetime',
        'label' => 'string',
        'byline' => 'string',
        'slug' => 'string',
        'content' => 'string',
        'description' => 'string',
        'introduction' => 'string',
        'summary' => 'string',
        'url' => 'string',
        'ui' => 'array',
        'icon' => 'string',
        'image' => 'string',
        'avatar' => 'string',
        'active' => 'boolean',
        'canceled' => 'boolean',
        'closed' => 'boolean',
        'completed' => 'boolean',
        'flagged' => 'boolean',
        'internal' => 'boolean',
        'locked' => 'boolean',
        'pending' => 'boolean',
        'planned' => 'boolean',
        'problem' => 'boolean',
        'published' => 'boolean',
        'released' => 'boolean',
        'retired' => 'boolean',
        'resolved' => 'boolean',
        'suspended' => 'boolean',
        'unknown' => 'boolean',
        'only_admin' => 'boolean',
        'only_user' => 'boolean',
        'only_guest' => 'boolean',
        'allow_public' => 'boolean',
        'assets' => 'array',
        'backlog' => 'string',
        'board' => 'string',
        'flow' => 'string',
        'meta' => 'array',
        'notes' => 'array',
        'options' => 'array',
        'roadmap' => 'array',
        'sources' => 'array',
    ];

    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'flow_type',
        'note_id',
        'tag_id',
        'team_id',
        'gids',
        'po',
        'pg',
        'pw',
        'status',
        'rank',
        'size',
        'label',
        'byline',
        'slug',
        'content',
        'description',
        'introduction',
        'summary',
        'url',
        'active',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'problem',
        'published',
        'retired',
        'suspended',
        'unknown',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'ui',
        'icon',
        'image',
        'avatar',
        'start_at',
        'planned_start_at',
        'end_at',
        'planned_end_at',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'postponed_at',
        'published_at',
        'released_at',
        'resumed_at',
        'suspended_at',
        'assets',
        'flow',
        'meta',
        'notes',
        'options',
    ];

    /**
     * The note of the flow.
     */
    public function note(): HasOne
    {
        return $this->hasOne(
            Note::class,
            'id',
            'note_id'
        );
    }

    /**
     * The tag of the flow.
     */
    public function tag(): HasOne
    {
        return $this->hasOne(
            Tag::class,
            'id',
            'tag_id'
        );
    }

    /**
     * The team of the flow.
     */
    public function team(): HasOne
    {
        return $this->hasOne(
            Team::class,
            'id',
            'team_id'
        );
    }
}
