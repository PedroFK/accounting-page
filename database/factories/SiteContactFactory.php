<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContact>
 */
class SiteContactFactory extends Factory
{
    public function definition(): array
    {
        return [
        'name'           => fake()->name(),
        'phone_1'       => fake()->tollFreePhoneNumber(),
        'email'          => fake()->unique()->email(),
        'message'       => fake()->text(200)
        ];
    }
}
