<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\UserTest;

class RegistrationTest extends UserTest
{
    use RefreshDatabase;

    public function test_users_cannot_register()
    {
        $response = $this->postJson('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
        $response->assertUnauthorized();
    }
    public function test_admins_can_create_new_users()
    {
        $response = $this->actingAs($this->admin)->postJson('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertOk();
    }
}
