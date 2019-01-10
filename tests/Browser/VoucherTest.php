<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class VoucherTest extends DuskTestCase
{
    public function user_can_view_vouchers()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                ->visit('/nova/resources/users')
                ->waitForText('admin')
                ->assertSee('admin');
        });
    }
}
