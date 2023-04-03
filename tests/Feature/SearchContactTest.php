<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Contact;
use App\Models\Company;

class SearchContactTest extends TestCase
{
    use RefreshDatabase;
    public function testContactView()
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'i-love-laravel')
        ]);
        $response = $this->actingAs($user)->get(route('contacts.index'));
        $response->assertSuccessful();
        $response->assertViewIs('contacts.index');
        $response->assertSeeText('Contacten');
    }
}