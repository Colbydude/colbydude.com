<?php

namespace Tests\Feature;

use Tests\TestCase;

class SiteTest extends TestCase
{
    /**
     * Tests that the site builds and runs.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
