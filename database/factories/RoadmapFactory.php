<?php

declare(strict_types=1);
/**
 * Playground
 */
namespace Database\Factories\Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Matrix\Models\Roadmap;

/**
 * \Database\Factories\Playground\Matrix\Models\RoadmapFactory
 *
 * @extends Factory<Roadmap>
 */
class RoadmapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Roadmap>
     */
    protected $model = Roadmap::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'label' => $this->faker->sentence(3),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),

        ];
    }
}
