<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    use RefreshDatabase;
    function test_contactSearch()
    {
        Contact::factory()->count(5)->create();

        $first = Contact::factory()->create(['first_name' => 'Name']);
        $second = Contact::factory()->create(['last_name' => 'Name']);

        $contacts = Contact::contactSearch("Name");

        $this->assertEquals($contacts->count(), 2);
        $this->assertEquals($contacts->first()->id, $first->id);
        $this->assertEquals($contacts->last()->id, $second->id);
    }
}