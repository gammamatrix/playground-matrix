<?php
/**
 * GammaMatrix
 */

namespace Database\Factories\GammaMatrix\Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * \Database\Factories\GammaMatrix\Playground\Matrix\Models\TeamFactory
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\GammaMatrix\Playground\Matrix\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \GammaMatrix\Playground\Matrix\Models\Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->bs;
        return [
            'label' => fake()->bs,
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),

        ];
    }
}
