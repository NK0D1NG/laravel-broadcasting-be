<?php

namespace Tests;

use App\Models\User;
use App\Support\UserManager;
use Tests\TestCase;

abstract class UserTest extends TestCase
{
    protected $user;
    protected $admin;
    protected $rooms;

    protected function setUp(): void 
    {
        parent::setUp();
        $this->user = User::factory()->create();
        $this->admin = User::factory()->create();
        UserManager::createAdminRoleAndPermissions();
        UserManager::createClientRole();
        $this->admin->assignRole('admin');
    }

    protected function tearDown(): void 
    {
        parent::tearDown();
    }
}


