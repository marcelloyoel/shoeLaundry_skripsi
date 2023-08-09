<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pembeda = 1;
        return [
            'username'  => $this->faker->firstNameMale() . $pembeda++,
            'email'  => $this->faker->email(),
            'password'  => bcrypt('password'),
            'status'  => 1,
            'displayName'  => $this->faker->firstNameMale(),
            'phoneNumber'  => $this->faker->phoneNumber(),
            'group_id'     =>  2
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
