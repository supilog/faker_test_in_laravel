<?php

namespace Database\Factories;

use App\Models\Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class FakerFactory extends Factory
{
    protected $model = Faker::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => rand(1, 99),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'text' => $this->faker->realText(),
            'flag1' => $this->faker->boolean(),
            'flag2' => $this->faker->boolean(),
            'flag3' => $this->faker->boolean(),
            'flag4' => $this->faker->boolean(),
            'flag5' => $this->faker->boolean(),
        ];
        }
}
