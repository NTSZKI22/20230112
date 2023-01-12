<?php

namespace Tests\Feature;

use App\Models\Merchant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MerchantTest extends TestCase
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

        $response = $this->postJson('/api/merchants/create', [
            'name' => "Név",
            'address' => "Utca",
            'phone' => "1111111111",
            'active' => "0",
        ]);

        $response->assertStatus(201);
    }

    public function test_Delete()
    {
        $this->seed();

        $ped = new Merchant();
        $ped->name = "teszt";
        $ped->address = "teszt";
        $ped->phone = "teszt";
        $ped->active = "1";
        $ped->save();

        $response = $this->delete('/api/merchants/delete/' . $ped['id']);

        $response->assertStatus(204);
    }

    public function test_get()
    {
        $this->seed();

        $response = $this->get('/api/merchants/get');
        $response->assertStatus(200);
    }

    public function test_update()
    {
        $this->seed();

        $ped = new Merchant();
        $ped->name = "teszt";
        $ped->address = "teszt";
        $ped->phone = "teszt";
        $ped->active = "0";
        $ped->save();

        $response = $this->putJson('/api/merchants/update/' . $ped['id'], [
            'name' => "ok",
            'address' => "utca",
            'phone' => "111111111",
            'active' => "0",
        ]);

        $response->assertStatus(200);
        $ped->delete();
    }
}