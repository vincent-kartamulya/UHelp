<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'location' => $this->faker->randomElement(['Online', 'Offline']),
            'date' => $this->faker->date(),
            'participant' => $this->faker->imageUrl(480, 480),
            'user_id' => mt_rand(1, 3),
            'slug' => $this->faker->slug(),
            'template' => $this->faker->imageUrl(480, 480),
            'nameX' => $this->faker->randomNumber(3, false),
            'nameY' => $this->faker->randomNumber(3, false)
        ];
    }
}
