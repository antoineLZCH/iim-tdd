<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    /**
     * @test
     */
    public function a_user_can_create_an_object()
    {

//        $this->withoutExceptionHandling();
        $attributes = [
            'title' => $this->faker->sentence(5, 3),
            'quality' => $this->faker->randomElement(['common', 'uncommon', 'rare', 'epic', 'legendary', 'artifact']),
            'type' => $this->faker->sentence,
            'slot' => $this->faker->randomElement(['weapon', 'gauntlets', 'helmet', 'necklace']),
            'characteristics' => [
                "agility" => $this->faker->randomNumber(3),
                "chance" => $this->faker->randomNumber(3),
                "charisma" => $this->faker->randomNumber(3),
                "strength" => $this->faker->randomNumber(3),
                "intelligence" => $this->faker->randomNumber(3),
                "spirit" => $this->faker->randomNumber(3),
                "stamina" => $this->faker->randomNumber(3),
                "initiative" => $this->faker->randomNumber(3)
            ]
        ];

        $this->post('/items', $attributes);

        $this->assertDatabaseHas('items', $attributes);
    }
}
