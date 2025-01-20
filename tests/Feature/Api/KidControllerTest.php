<?php

namespace Tests\Feature\Api;

use App\Models\Kid;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KidControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfRecieveAllEntryOfKidsInJsonFile(){
        $Kids = Kid::factory(2)->create();

        $response = $this->get(route('apikidshome'));
       
        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInKidsWithApi(){
       
        $kids = Kid::factory(2)->create();

        $response = $this->delete(route('apikidsdestroy', 1));

        $this->assertDatabaseCount('kids', 1);

        $response = $this->get(route('apikidshome'));
        $response->assertJsonCount(1);

    }

    public function test_CheckIfCanCreateNewEntryInKidsWithJsonFile()
    {

        $data = [
            'name' => 'Pepito',
            'surname' => 'Grillo',
            'photo' => 'kids',
            'country' => 'Perú',
            'age' => '16',
            'behaviour' => true
        ];

        $response = $this->post(route('apikidsstore'), $data);
        $response->assertStatus(200)
            ->assertJsonFragment(['name' => 'Pepito']);

        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
            ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInKidsWithJsonFile()
    {
        $kid = Kid::factory()->create();

        $response = $this->get(route('apikidshome'));
       
        $response->assertStatus(200)
            ->assertJsonCount(1)
            ->assertJsonFragment(['age' => $kid->age]);  

        $response = $this->put(route('apikidsupdate', 1), 
        [
            'name' => $kid->name,
            'surname' => $kid->surname,
            'photo' => $kid->photo,
            'country' => $kid->country,
            'age' => 88,
            'behaviour' => $kid->behaviour
        ]);

        $data = ['age' => 88];
        $response = $this->get(route('apikidshome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    } 

    public function test_CheckIfFunctionShowWorks(){
        $kid = Kid::factory()->create();

        $data = ['name' => $kid->name ];
        $response = $this->get(route('apikidsshow', $kid->id));
        $response->assertStatus(200)
            ->assertJsonFragment($data);
    }
}
