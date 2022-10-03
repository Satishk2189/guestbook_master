<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function TestUserLogin(){
        $user = User::factory()->create();
        $this->post('login',[
            'email' => $user->email,
            'password' => 'password'
        ]);
        $this->assertAuthenticated();
    }
    public function testUserDuplicate(){
        $adminUser = User::make([
            'name' => 'Admin',
            'email' => 'satishadmin@hotmail.com',
        ]);
        $user = User::make([
            'name' => 'satishK',
            'email' => 'satishadmin@hotmail.com',
        ]);
        $this->assertTrue($adminUser->name != $user->name);
    }
}
