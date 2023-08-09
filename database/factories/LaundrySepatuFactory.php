<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaundrySepatu>
 */
class LaundrySepatuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $id = 5;
        return [
            'user_id'    => $id++,
            'laundrySepatuName' => $this->faker->firstNameMale() . 'Laundry',
            'laundrySepatuSlug' => $this->faker->slug(),
            'bio'               => $this->faker->paragraph(mt_rand(4, 10))
        ];
    }
}
