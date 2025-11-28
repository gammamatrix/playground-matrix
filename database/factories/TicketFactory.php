<?php

/**
 * Playground
 */

declare(strict_types=1);

namespace Database\Factories\Playground\Matrix\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Playground\Matrix\Models\Ticket;

/**
 * \Database\Factories\Playground\Matrix\Models\TicketFactory
 *
 * @extends Factory<Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Ticket>
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        $key = $this->faker->lexify();
        $code = $this->faker->randomNumber(8);

        $slug = sprintf(
            '%1$s-%2$d',
            $key,
            $code
        );

        $key_code_hash = md5($slug);

        return [
            'label' => $this->faker->sentence(3),
            'title' => $title,
            'key' => $key,
            'slug' => $slug,
            'key_code_hash' => $key_code_hash,
            'code' => $code,
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),
        ];
    }

    // States: flags

    public function locked(): TicketFactory
    {
        return $this->state(fn (array $attributes) => [
            'locked' => true,
        ]);
    }

    public function featured(): TicketFactory
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    public function special(): TicketFactory
    {
        return $this->state(fn (array $attributes) => [
            'special' => true,
        ]);
    }
}
