<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Database\Factories\Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Matrix\Models\Matrix;

/**
 * \Database\Factories\Playground\Matrix\Models\MatrixFactory
 *
 * @extends Factory<Matrix>
 */
class MatrixFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Matrix>
     */
    protected $model = Matrix::class;

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
