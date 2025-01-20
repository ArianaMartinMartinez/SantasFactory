<?php

namespace Tests\Feature;

use App\Models\Toy;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Kid;

class ToyControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_ListOfEntryCanBeRead()
    {
        $this->withoutExceptionHandling();
        Toy::all();

        $response = $this->get('/elf/toys');
        $response->assertStatus(200)
            ->assertViewIs('toys');
    }

    public function test_CreateFunctionReturnViewCorrectly()
    {

        $response = $this->get('/elf/toys/create');

        $response->assertStatus(200)
            ->assertViewIs('createToyForm');
    }

    public function test_storeMethodSavesObjectCorrectly()
    {
        $toy = [
            'name' => 'test',
            'description' => 'test',
            'photo' => 'test',
            'age_range' => '0-3'
        ];

        $response = $this->post(route('toysstore'), $toy);

        $response = $this->get(route('toyshome'));
        $response->assertStatus(200);
        $this->assertDatabaseCount('Toys', 1);
    }

    public function test_checkIfShowViewWorksCorrectly()
    {
        $toy = Toy::factory()->create();

        $response = $this->get(route('toysshow', $toy->id));

        $response->assertStatus(200)
            ->assertViewIs('showToy');
    }

    public function test_checkIfEditFormViewWorksCorrectly()
    {
        $toy = Toy::factory()->create();

        $response = $this->get(route('toysedit', $toy->id));

        $response->assertStatus(200)
            ->assertViewIs('editToyForm');
    }

    public function test_checkIfUpdateMethodWorksCorrectly()
    {
        $toy = Toy::factory()->create();

        $response = $this->put(route('toysupdate', 1), 
        [
            'name' => 'updatedToy',
            'description' => $toy->description,
            'photo' => $toy->photo,
            'age_range' => $toy->age_range
        ]);

        $toy = Toy::find(1);
        $this->assertEquals('updatedToy', $toy->name);
    }

    public function test_checkIfDeleteMethodDestroyElement()
    {
        Toy::factory(1)->create();

        $response = $this->delete(route('toysdestroy',1));
        $this->assertDatabaseCount('Toys', 0);
    }

}
