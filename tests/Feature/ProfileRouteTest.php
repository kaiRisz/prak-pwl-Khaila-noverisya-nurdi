<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfileRouteTest extends TestCase
{
    public function test_profile_route_loads(): void
    {
        $response = $this->get('/profile/Khalil/IF-1/240101');

        $response->assertStatus(200);
        $response->assertSee('Khalil');
        $response->assertSee('IF-1');
        $response->assertSee('240101');
    }
}
