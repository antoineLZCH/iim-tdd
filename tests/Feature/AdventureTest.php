<?php

namespace Tests\Feature;

use App\Models\Adventure;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdventureTest extends TestCase
{

    use WithFaker, RefreshDatabase, HasFactory;

    /**
     * @test
     */
    public function a_user_can_create_an_adventure()
    {

        $this->withoutExceptionHandling();

        $user = User::factory()->make();
        $adventure = Adventure::factory()->make(['email' => $user->email]);
        $this->post('/api/adventures', $adventure->toArray());

        $this->assertDatabaseHas('adventures', $adventure->toArray());
    }
}
