<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ServiceNetworkTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testForm()
    {
        $this->browse(function ($browser)  {
            $browser->visit('/service-network-application')
                    ->type('first_name', 'testTest')
                    ->type('last_name', 'testLastName')
                    ->type('company', 'acme inc')
                    ->type('message', 'maybe this testing will work?')
                    ->pause(1000)
                    ->press('Send Message')
                    ->assertPathIs('/service-network-application');
        });
    }
}
