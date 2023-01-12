<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ModelsTest extends TestCase
{
    use RefreshDatabase;
    public function test_create()
    {
        $this->seed();

        $response = $this->get('/api/models/get')->content();
        $oldresponseArray = collect(json_decode($response, true));

        $response = $this->postJson('/api/models/create', [
            'brand_id' =>1,
            'name' => 'name'
        ]);
        $response->assertStatus(201);
        $response = $this->get('/api/models/get')->content();
        $responseArray = collect(json_decode($response, true));

        $this->assertCount(sizeof($oldresponseArray)+1, $responseArray);

    }
    public function test_update()
    {
        $this->seed();

        $response = $this->get('/api/models/get')->content();
        $oldresponseArray = collect(json_decode($response, true));

        $response = $this->putJson(
            '/api/models/update/'.$responseArray[0]['id'],
            [
                'name' => "Teszt",
                'brand_id' =>2
            ]
            );

        $response->assertStatus(200);

        $this->assertEquals(json_decode($response->content(), true)["name"],
        "Teszt"
        );


    }
    public function test_delete()
    {
        $this->seed();

        $response = $this->get('/api/models/get')->content();
        $oldresponseArray = collect(json_decode($response, true));

        $response = $this->delete('/api/models/delete'.$oldresponseArray[sizeof($oldresponseArray)-1]['id']);
        $response->assertStatus(404);

        $response = $this->get('/api/models/get')->content();

        $responseArray = collect(json_decode($response, true));

        $this->assertCount(sizeof($oldresponseArray)-1,$responseArray);
    }
}
