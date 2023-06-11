<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $issuingDate = $this->faker->date();
        $expiredDate = date('Y-m-d', strtotime($issuingDate . ' + 5 years'));

        return [
            'user_id' => mt_rand(1, 3),
            'event_id' => mt_rand(1, 3),
            'recipient_id' => mt_rand(1, 10),
            'uuid' => $this->faker->uuid(),
            'issuing_date' => $issuingDate,
            'expired_date' => $expiredDate,
            'path' => $this->faker->filePath()
        ];
    }
}
