<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Playground\Models\Model;

/**
 * \Playground\Matrix\Models\Note
 *
 * @property string $id
 * @property ?string $note_type
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $matrix_id
 * @property ?string $tag_id
 * @property ?Carbon $created_at
 * @property ?Carbon $updated_at
 * @property ?Carbon $deleted_at
 * @property int $gids
 * @property int $po
 * @property int $pg
 * @property int $pw
 * @property bool $only_admin
 * @property bool $only_user
 * @property bool $only_guest
 * @property bool $allow_public
 * @property int $status
 * @property int $rank
 * @property int $size
 * @property ?array $matrix
 * @property ?int $x
 * @property ?int $y
 * @property ?int $z
 * @property ?double $r
 * @property ?double $theta
 * @property ?double $rho
 * @property ?double $phi
 * @property ?double $elevation
 * @property ?double $latitude
 * @property ?double $longitude
 * @property bool $active
 * @property bool $canceled
 * @property bool $closed
 * @property bool $completed
 * @property bool $cron
 * @property bool $featured
 * @property bool $flagged
 * @property bool $internal
 * @property bool $locked
 * @property bool $pending
 * @property bool $planned
 * @property bool $prioritized
 * @property bool $problem
 * @property bool $published
 * @property bool $released
 * @property bool $retired
 * @property bool $special
 * @property bool $suspended
 * @property bool $unknown
 * @property string $locale
 * @property string $label
 * @property string $title
 * @property string $byline
 * @property ?string $slug
 * @property string $url
 * @property string $description
 * @property string $introduction
 * @property ?string $content
 * @property ?string $summary
 * @property string $icon
 * @property string $image
 * @property string $avatar
 * @property ?array $ui
 * @property ?array $assets
 * @property ?array $meta
 * @property ?array $notes
 * @property ?array $options
 * @property ?array $sources
 */
class Note extends Model
{
    protected $table = 'matrix_notes';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'note_type' => null,
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'matrix_id' => null,
        'tag_id' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
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
        'matrix' => '{}',
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
        'cron' => false,
        'featured' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'pending' => false,
        'planned' => false,
        'prioritized' => false,
        'problem' => false,
        'published' => false,
        'released' => false,
        'retired' => false,
        'special' => false,
        'suspended' => false,
        'unknown' => false,
        'locale' => '',
        'label' => '',
        'title' => '',
        'byline' => '',
        'slug' => null,
        'url' => '',
        'description' => '',
        'introduction' => '',
        'content' => null,
        'summary' => null,
        'icon' => '',
        'image' => '',
        'avatar' => '',
        'ui' => '{}',
        'assets' => '{}',
        'meta' => '{}',
        'notes' => '[]',
        'options' => '{}',
        'sources' => '{}',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'note_type',
        'owned_by_id',
        'parent_id',
        'matrix_id',
        'tag_id',
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
        'cron',
        'featured',
        'flagged',
        'internal',
        'locked',
        'pending',
        'planned',
        'prioritized',
        'problem',
        'published',
        'released',
        'retired',
        'special',
        'suspended',
        'unknown',
        'locale',
        'label',
        'title',
        'byline',
        'slug',
        'url',
        'description',
        'introduction',
        'content',
        'summary',
        'icon',
        'image',
        'avatar',
        'ui',
        'assets',
        'meta',
        'options',
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
            'note_type' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
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
            'matrix' => 'array',
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
            'cron' => 'boolean',
            'featured' => 'boolean',
            'flagged' => 'boolean',
            'internal' => 'boolean',
            'locked' => 'boolean',
            'pending' => 'boolean',
            'planned' => 'boolean',
            'prioritized' => 'boolean',
            'problem' => 'boolean',
            'published' => 'boolean',
            'released' => 'boolean',
            'retired' => 'boolean',
            'special' => 'boolean',
            'suspended' => 'boolean',
            'unknown' => 'boolean',
            'locale' => 'string',
            'label' => 'string',
            'title' => 'string',
            'byline' => 'string',
            'slug' => 'string',
            'url' => 'string',
            'description' => 'string',
            'introduction' => 'string',
            'content' => 'string',
            'summary' => 'string',
            'icon' => 'string',
            'image' => 'string',
            'avatar' => 'string',
            'ui' => 'array',
            'assets' => 'array',
            'meta' => 'array',
            'notes' => 'array',
            'options' => 'array',
            'sources' => 'array',
        ];
    }

    /**
     * The matrix of the note.
     *
     * @return HasOne<Matrix>
     */
    public function matrix(): HasOne
    {
        return $this->hasOne(
            Matrix::class,
            'id',
            'matrix_id'
        );
    }

    /**
     * The tag of the note.
     *
     * @return HasOne<Tag>
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
     * The backlogs of the note.
     *
     * @return HasMany<Backlog>
     */
    public function backlogs(): HasMany
    {
        return $this->hasMany(
            Backlog::class,
            'note_id',
            'id'
        );
    }

    /**
     * The boards of the note.
     *
     * @return HasMany<Board>
     */
    public function boards(): HasMany
    {
        return $this->hasMany(
            Board::class,
            'note_id',
            'id'
        );
    }

    /**
     * The epics of the note.
     *
     * @return HasMany<Epic>
     */
    public function epics(): HasMany
    {
        return $this->hasMany(
            Epic::class,
            'note_id',
            'id'
        );
    }

    /**
     * The milestones of the note.
     *
     * @return HasMany<Milestone>
     */
    public function milestones(): HasMany
    {
        return $this->hasMany(
            Milestone::class,
            'note_id',
            'id'
        );
    }

    /**
     * The projects of the note.
     *
     * @return HasMany<Project>
     */
    public function projects(): HasMany
    {
        return $this->hasMany(
            Project::class,
            'note_id',
            'id'
        );
    }

    /**
     * The releases of the note.
     *
     * @return HasMany<Release>
     */
    public function releases(): HasMany
    {
        return $this->hasMany(
            Release::class,
            'note_id',
            'id'
        );
    }

    /**
     * The roadmaps of the note.
     *
     * @return HasMany<Roadmap>
     */
    public function roadmaps(): HasMany
    {
        return $this->hasMany(
            Roadmap::class,
            'note_id',
            'id'
        );
    }

    /**
     * The sprints of the note.
     *
     * @return HasMany<Sprint>
     */
    public function sprints(): HasMany
    {
        return $this->hasMany(
            Sprint::class,
            'note_id',
            'id'
        );
    }

    /**
     * The teams of the note.
     *
     * @return HasMany<Team>
     */
    public function teams(): HasMany
    {
        return $this->hasMany(
            Team::class,
            'note_id',
            'id'
        );
    }

    /**
     * The tickets of the note.
     *
     * @return HasMany<Ticket>
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(
            Ticket::class,
            'note_id',
            'id'
        );
    }
}
