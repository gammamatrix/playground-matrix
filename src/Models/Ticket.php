<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Playground\Models\Model;

/**
 * \Playground\Matrix\Models\Ticket
 */
class Ticket extends Model
{
    protected $table = 'matrix_tickets';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'ticket_type' => null,
        'duplicate_id' => null,
        'backlog_id' => null,
        'board_id' => null,
        'completed_by_id' => null,
        'epic_id' => null,
        'flow_id' => null,
        'milestone_id' => null,
        'note_id' => null,
        'project_id' => null,
        'release_id' => null,
        'reported_by_id' => null,
        'roadmap_id' => null,
        'source_id' => null,
        'sprint_id' => null,
        'tag_id' => null,
        'team_id' => null,
        'version_id' => null,
        'version_fixed_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'start_at' => null,
        'planned_start_at' => null,
        'end_at' => null,
        'planned_end_at' => null,
        'canceled_at' => null,
        'closed_at' => null,
        'embargo_at' => null,
        'fixed_at' => null,
        'postponed_at' => null,
        'published_at' => null,
        'released_at' => null,
        'resolved_at' => null,
        'resumed_at' => null,
        'suspended_at' => null,
        'gids' => 0,
        'po' => 0,
        'pg' => 0,
        'pw' => 0,
        'only_admin' => false,
        'only_user' => false,
        'only_guest' => false,
        'allow_public' => false,
        'status' => 0,
        'rank' => 0,
        'size' => 0,
        'matrix' => '',
        'x' => null,
        'y' => null,
        'z' => null,
        'r' => null,
        'theta' => null,
        'rho' => null,
        'phi' => null,
        'elevation' => null,
        'latitude' => null,
        'longitude' => null,
        'active' => true,
        'canceled' => false,
        'closed' => false,
        'completed' => false,
        'duplicate' => false,
        'fixed' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'pending' => false,
        'planned' => false,
        'problem' => false,
        'published' => false,
        'released' => false,
        'retired' => false,
        'resolved' => false,
        'suspended' => false,
        'unknown' => false,
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'key' => '',
        'handler' => '',
        'code' => 0,
        'key_code_hash' => '',
        'priority' => '',
        'severity' => '',
        'resolution' => '',
        'step' => '',
        'state' => '',
        'workflow_type' => '',
        'points' => 0,
        'story' => null,
        'criteria' => null,
        'reproducibility' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'assets' => '{}',
        'backlog' => '{}',
        'board' => '{}',
        'flow' => '{}',
        'history' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'roadmap' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'owned_by_id',
        'parent_id',
        'ticket_type',
        'duplicate_id',
        'backlog_id',
        'board_id',
        'completed_by_id',
        'epic_id',
        'flow_id',
        'milestone_id',
        'note_id',
        'project_id',
        'release_id',
        'reported_by_id',
        'roadmap_id',
        'source_id',
        'sprint_id',
        'tag_id',
        'team_id',
        'version_id',
        'version_fixed_id',
        'start_at',
        'planned_start_at',
        'end_at',
        'planned_end_at',
        'canceled_at',
        'closed_at',
        'embargo_at',
        'fixed_at',
        'postponed_at',
        'published_at',
        'released_at',
        'resumed_at',
        'resolved_at',
        'suspended_at',
        'gids',
        'po',
        'pg',
        'pw',
        'only_admin',
        'only_user',
        'only_guest',
        'allow_public',
        'status',
        'rank',
        'size',
        'matrix',
        'x',
        'y',
        'z',
        'r',
        'theta',
        'rho',
        'phi',
        'elevation',
        'latitude',
        'longitude',
        'active',
        'canceled',
        'closed',
        'completed',
        'duplicate',
        'fixed',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'problem',
        'published',
        'released',
        'retired',
        'resolved',
        'suspended',
        'unknown',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'key',
        'handler',
        'code',
        'key_code_hash',
        'priority',
        'severity',
        'resolution',
        'step',
        'state',
        'workflow_type',
        'points',
        'story',
        'criteria',
        'reproducibility',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'backlog',
        'board',
        'flow',
        'history',
        'meta',
        'notes',
        'options',
        'roadmap',
        'sources',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'ticket_type' => 'string',
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
            'fixed_at' => 'datetime',
            'postponed_at' => 'datetime',
            'published_at' => 'datetime',
            'released_at' => 'datetime',
            'resumed_at' => 'datetime',
            'resolved_at' => 'datetime',
            'suspended_at' => 'datetime',
            'gids' => 'integer',
            'po' => 'integer',
            'pg' => 'integer',
            'pw' => 'integer',
            'only_admin' => 'boolean',
            'only_user' => 'boolean',
            'only_guest' => 'boolean',
            'allow_public' => 'boolean',
            'status' => 'integer',
            'rank' => 'integer',
            'size' => 'integer',
            'matrix' => 'string',
            'x' => 'integer',
            'y' => 'integer',
            'z' => 'integer',
            'r' => 'float',
            'theta' => 'float',
            'rho' => 'float',
            'phi' => 'float',
            'elevation' => 'float',
            'latitude' => 'float',
            'longitude' => 'float',
            'active' => 'boolean',
            'canceled' => 'boolean',
            'closed' => 'boolean',
            'completed' => 'boolean',
            'duplicate' => 'boolean',
            'fixed' => 'boolean',
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
            'label' => 'string',
            'title' => 'string',
            'byline' => 'string',
            'slug' => 'string',
            'url' => 'string',
            'description' => 'string',
            'introduction' => 'string',
            'content' => 'string',
            'summary' => 'string',
            'key' => 'string',
            'handler' => 'string',
            'code' => 'integer',
            'key_code_hash' => 'string',
            'priority' => 'string',
            'severity' => 'string',
            'resolution' => 'string',
            'step' => 'string',
            'state' => 'string',
            'workflow_type' => 'string',
            'points' => 'integer',
            'story' => 'string',
            'criteria' => 'string',
            'reproducibility' => 'decimal',
            'icon' => 'string',
            'image' => 'string',
            'avatar' => 'string',
            'ui' => 'array',
            'assets' => 'array',
            'backlog' => 'array',
            'board' => 'array',
            'flow' => 'array',
            'history' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'roadmap' => 'array',
            'sources' => 'array',
        ];
    }

    /**
     * The backlog of the ticket.
     */
    public function backlog(): HasOne
    {
        return $this->hasOne(
            Backlog::class,
            'id',
            'backlog_id'
        );
    }

    /**
     * The board of the ticket.
     */
    public function board(): HasOne
    {
        return $this->hasOne(
            Board::class,
            'id',
            'board_id'
        );
    }

    /**
     * The completed by user of the ticket.
     */
    public function completedBy(): HasOne
    {
        /**
         * @var class-string<\Illuminate\Contracts\Auth\Authenticatable>
         */
        $uc = config('auth.providers.users.model', '\\App\\Models\\User');

        return $this->hasOne(
            $uc,
            'id',
            'completed_by_id'
        );
    }

    /**
     * The epic of the ticket.
     */
    public function epic(): HasOne
    {
        return $this->hasOne(
            Epic::class,
            'id',
            'epic_id'
        );
    }

    /**
     * The flow of the ticket.
     */
    public function flow(): HasOne
    {
        return $this->hasOne(
            Flow::class,
            'id',
            'flow_id'
        );
    }

    /**
     * The milestone of the ticket.
     */
    public function milestone(): HasOne
    {
        return $this->hasOne(
            Milestone::class,
            'id',
            'milestone_id'
        );
    }

    /**
     * The project of the ticket.
     */
    public function project(): HasOne
    {
        return $this->hasOne(
            Project::class,
            'id',
            'project_id'
        );
    }

    /**
     * The release of the ticket.
     */
    public function release(): HasOne
    {
        return $this->hasOne(
            Release::class,
            'id',
            'release_id'
        );
    }

    /**
     * The reported by user of the ticket.
     */
    public function reportedBy(): HasOne
    {
        /**
         * @var class-string<\Illuminate\Contracts\Auth\Authenticatable>
         */
        $uc = config('auth.providers.users.model', '\\App\\Models\\User');

        return $this->hasOne(
            $uc,
            'id',
            'reported_by_id'
        );
    }

    /**
     * The roadmap of the ticket.
     */
    public function roadmap(): HasOne
    {
        return $this->hasOne(
            Roadmap::class,
            'id',
            'roadmap_id'
        );
    }

    /**
     * The source of the ticket.
     */
    public function source(): HasOne
    {
        return $this->hasOne(
            Source::class,
            'id',
            'source_id'
        );
    }

    /**
     * The sprint of the ticket.
     */
    public function sprint(): HasOne
    {
        return $this->hasOne(
            Sprint::class,
            'id',
            'sprint_id'
        );
    }

    /**
     * The tag of the ticket.
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
     * The team of the ticket.
     */
    public function team(): HasOne
    {
        return $this->hasOne(
            Team::class,
            'id',
            'team_id'
        );
    }

    /**
     * The version of the ticket.
     */
    public function version(): HasOne
    {
        return $this->hasOne(
            Version::class,
            'id',
            'version_id'
        );
    }
}
