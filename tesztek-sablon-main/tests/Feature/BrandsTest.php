<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BrandsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_create()
    {
        $this->seed();

        $response = $this->get('/api/brands/get')->content();
        $oldresponseArray = collect(json_decode($response, true));

        $response = $this->postJson('/api/brands/create', [
            'brand_id' =>1,
            'name' => 'name'
        ]);
        $response->assertStatus(201);
        $response = $this->get('/api/brands/get')->content();
        $responseArray = collect(json_decode($response, true));

        $this->assertCount(sizeof($oldresponseArray)+1, $responseArray);

    }

    public function test_update()
    {
        $this->seed();

        $response = $this->get('/api/brands/get')->content();
        $oldresponseArray = collect(json_decode($response, true));

        $response = $this->putJson(
            '/api/brands/update/'.$responseArray[0]['id'],
            [
                'name' => "Teszt"
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

        $response = $this->get('/api/brands/get')->content();
        $oldresponseArray = collect(json_decode($response, true));

        $response = $this->delete('/api/brands/delete/'.$oldresponseArray[sizeof($oldresponseArray)-1]['id']);
        $response->assertStatus(204);

        $response = $this->get('/api/brands/get')->content();

        $responseArray = collect(json_decode($response, true));

        $this->assertCount(sizeof($oldresponseArray)-1,$responseArray);
    }
}
