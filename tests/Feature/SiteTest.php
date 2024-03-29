<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SiteTest extends TestCase
{
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testBasicSite()
    {
        $response = $this->get('/');
        $response->assertSeeText('Laravel');
        $response->assertSeeText('Log in');
    }
    public function testContactsNotLoggedIn()
    {
        $response = $this->get(route('contacts.index'));
        $response->assertSeeText('Redirecting to');
        $response->assertSeeText('login');
    }
    public function testLogin()
    {
        $response = $this->get(route('login'));
        $response->assertSeeText('Email');
        $response->assertSeeText('Password');
    }
}