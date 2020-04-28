<?php

namespace Tests\Feature;

use Tests\TestCase;

class CreateMessageTest extends TestCase
{
    public function testCreateMessageFormIsShown()
    {
        $response = $this->get(action('EncryptController@create'));

        $response->assertOk();
        $response->assertSee(config('app.name'));
        $response->assertSee(config('Plaats hier je bericht'));
        $response->assertSee(config('Versleutel bericht'));
    }
}
