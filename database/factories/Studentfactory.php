<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => $this->faker->unique()->randomNumber(5),
            'nama' => $this->faker->name(),
            'tanggal_lahir' => $this->faker->date(),
            'kelas_id' => $this->faker->numberBetween(1, 6),
            'alamat' => $this->faker->address(),
        ];
    }
}