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
 * \Playground\Matrix\Models\Tag
 *
 * @property string $id
 * @property ?string $tag_type
 * @property ?scalar $created_by_id
 * @property ?scalar $modified_by_id
 * @property ?scalar $owned_by_id
 * @property ?string $parent_id
 * @property ?string $matrix_id
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
 * @property bool $cron
 * @property bool $featured
 * @property bool $flagged
 * @property bool $internal
 * @property bool $locked
 * @property bool $retired
 * @property bool $special
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
class Tag extends Model
{
    protected $table = 'matrix_tags';

    /**
     * The default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'tag_type' => null,
        'created_by_id' => null,
        'modified_by_id' => null,
        'owned_by_id' => null,
        'parent_id' => null,
        'matrix_id' => null,
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
        'cron' => false,
        'featured' => false,
        'flagged' => false,
        'internal' => false,
        'locked' => false,
        'retired' => false,
        'special' => false,
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
        'tag_type',
        'owned_by_id',
        'parent_id',
        'matrix_id',
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
        'cron',
        'featured',
        'flagged',
        'internal',
        'locked',
        'retired',
        'special',
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
            'tag_type' => 'string',
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
            'cron' => 'boolean',
            'featured' => 'boolean',
            'flagged' => 'boolean',
            'internal' => 'boolean',
            'locked' => 'boolean',
            'retired' => 'boolean',
            'special' => 'boolean',
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
     * The matrix of the tag.
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
     * The backlogs of the tag.
     *
     * @return HasMany<Backlog>
     */
    public function backlogs(): HasMany
    {
        return $this->hasMany(
            Backlog::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The boards of the tag.
     *
     * @return HasMany<Board>
     */
    public function boards(): HasMany
    {
        return $this->hasMany(
            Board::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The epics of the tag.
     *
     * @return HasMany<Epic>
     */
    public function epics(): HasMany
    {
        return $this->hasMany(
            Epic::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The milestones of the tag.
     *
     * @return HasMany<Milestone>
     */
    public function milestones(): HasMany
    {
        return $this->hasMany(
            Milestone::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The projects of the tag.
     *
     * @return HasMany<Project>
     */
    public function projects(): HasMany
    {
        return $this->hasMany(
            Project::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The releases of the tag.
     *
     * @return HasMany<Release>
     */
    public function releases(): HasMany
    {
        return $this->hasMany(
            Release::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The roadmaps of the tag.
     *
     * @return HasMany<Roadmap>
     */
    public function roadmaps(): HasMany
    {
        return $this->hasMany(
            Roadmap::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The sprints of the tag.
     *
     * @return HasMany<Sprint>
     */
    public function sprints(): HasMany
    {
        return $this->hasMany(
            Sprint::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The teams of the tag.
     *
     * @return HasMany<Team>
     */
    public function teams(): HasMany
    {
        return $this->hasMany(
            Team::class,
            'tag_id',
            'id'
        );
    }

    /**
     * The tickets of the tag.
     *
     * @return HasMany<Ticket>
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(
            Ticket::class,
            'tag_id',
            'id'
        );
    }
}
