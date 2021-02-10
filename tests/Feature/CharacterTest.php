<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CharacterTest extends TestCase
{
    use WithFaker, RefreshDatabase;


    /**
     * @test
     */
    public function a_user_can_create_a_character()
    {
        $this->withoutExceptionHandling();


        $races = [
            'Orc',
            'Human',
            'Dwarf',
            'Elf',
            'Gnome',
            'Troll'
        ];

        $attributes = [
            'name'         => $this->faker->userName,
            'race'         => $this->faker->randomElement($races),
            'sexe'         => $this->faker->randomElement([1, 2]),
            "agility"      => 1,
            "chance"       => 1,
            "charisma"     => 1,
            "strength"     => 1,
            "intelligence" => 1,
            "spirit"       => 1,
            "stamina"      => 1,
            "initiative"   => 1
        ];

        $this->post('/characters', $attributes);

        $this->assertDatabaseHas('characters', $attributes);

    }
}
