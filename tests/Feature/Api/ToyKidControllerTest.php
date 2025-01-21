<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use App\Models\Toy;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToyKidControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_checkIfAssignRandomGiftWorks(){
        Kid::factory(3)->create(['age' => '2']);
        Kid::factory(3)->create(['age' => '5']);
        Kid::factory(3)->create(['age' => '8']);
        Kid::factory(3)->create(['age' => '14']);
        Kid::factory(3)->create(['age' => '17']);
        Kid::factory(3)->create(['age' => '18']);

        $response = $this->get(route('apikidshome'));

        $response->assertStatus(200)
                    ->assertJsonCount(18);

        Toy::factory(2)->create(['age_range' => '0-3']);
        Toy::factory(2)->create(['age_range' => '3-7']);
        Toy::factory(2)->create(['age_range' => '7-12']);
        Toy::factory(2)->create(['age_range' => '12-16']);
        Toy::factory(2)->create(['age_range' => '16-18']);
        Toy::factory(2)->create(['age_range' => '+18']);
        Toy::factory(2)->create(['age_range' => '+99']);

        $response = $this->get(route('apitoyshome'));

        $response->assertStatus(200)
                    ->assertJsonCount(14);


        $response = $this->post(route('apiRandomToyKid'));

        $response->assertStatus(200);
    }
}
