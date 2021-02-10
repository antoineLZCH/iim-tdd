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
    public function an_item_can_be_created()
    {

        $this->withoutExceptionHandling();

        $attributes = [
            'title' => $this->faker->firstName(),
            'quality' => $this->faker->randomElement(['common', 'uncommon', 'rare', 'epic', 'legendary', 'artifact']),
            'slot' => $this->faker->randomElement(['helmet', 'shoulder', 'necklace', 'chest', 'wrist', 'hands', 'waist', 'legs', 'feet', 'ring', 'trinket']),
            "agility" => $this->faker->randomNumber(2),
            "chance" => $this->faker->randomNumber(2),
            "charisma" => $this->faker->randomNumber(2),
            "strength" => $this->faker->randomNumber(2),
            "intelligence" => $this->faker->randomNumber(2),
            "spirit" => $this->faker->randomNumber(2),
            "stamina" => $this->faker->randomNumber(2),
            "initiative" => $this->faker->randomNumber(2)
        ];

        $this->post('api/items', $attributes);

        $this->assertDatabaseHas('items', $attributes);
    }
}
