<?php
/**
 * Playground
 */
namespace Database\Factories\Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Matrix\Models\Release;

/**
 * \Database\Factories\Playground\Matrix\Models\ReleaseFactory
 *
 * @extends Factory<Release>
 */
class ReleaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Release>
     */
    protected $model = Release::class;

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