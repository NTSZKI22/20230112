<?php

namespace Tests\Feature;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_Create()
    {
        $this->seed();

        $response = $this->postJson('/api/cars/create', [
            'model_id' => "1",
            'fuel' => "oil",
            'engine' => "1111",
            'active' => "0",
        ]);

        $response->assertStatus(201);
    }

    public function test_Delete()
    {
        $this->seed();

        $car = new Car();
        $car->model_id = "1";
        $car->fuel = "oil";
        $car->engine = "1111";
        $car->active = "1";
        $car->save();

        $response = $this->delete('/api/cars/delete/' . $car['id']);

        $response->assertStatus(204);
    }

    public function test_get()
    {
        $this->seed();

        $response = $this->get('/api/cars/get');
        $response->assertStatus(200);
    }

    public function test_update()
    {
        $this->seed();

        $car = new Car();
        $car->model_id = "1";
        $car->fuel = "oil";
        $car->engine = "1111";
        $car->active = "1";
        $car->save();

        $response = $this->putJson('/api/cars/update/' . $car['id'], [
            'model_id' => "1",
            'fuel' => "oil",
            'engine' => "1111",
            'active' => "0",
        ]);

        $response->assertStatus(201);
        $car->delete();
    }

}