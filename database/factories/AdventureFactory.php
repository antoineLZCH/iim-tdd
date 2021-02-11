<?php

namespace Database\Factories;

use App\Models\Adventure;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdventureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adventure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->sentence(6),
            'status' => $this->faker->randomElement(['in progress', 'finished', 'not started']),
            'level' => 3,
            'description' => $this->faker->text(100),
            'duration' => 120,
            'email' => 'zeub'
        ];
    }
}
