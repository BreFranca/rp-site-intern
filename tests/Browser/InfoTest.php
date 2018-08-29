<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class InfoTest extends DuskTestCase
{

    public function testCreateInfo()
    {
        $admin = \App\User::find(1);
        $info = factory('App\Info')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $info) {
            $browser->loginAs($admin)
                ->visit(route('admin.infos.index'))
                ->clickLink('Add new')
                ->type("email_contato", $info->email_contato)
                ->type("linked_in", $info->linked_in)
                ->type("facebook", $info->facebook)
                ->type("instagram", $info->instagram)
                ->type("vimeo", $info->vimeo)
                ->press('Save')
                ->assertRouteIs('admin.infos.index')
                ->assertSeeIn("tr:last-child td[field-key='email_contato']", $info->email_contato)
                ->assertSeeIn("tr:last-child td[field-key='linked_in']", $info->linked_in)
                ->assertSeeIn("tr:last-child td[field-key='facebook']", $info->facebook)
                ->assertSeeIn("tr:last-child td[field-key='instagram']", $info->instagram)
                ->assertSeeIn("tr:last-child td[field-key='vimeo']", $info->vimeo)
                ->logout();
        });
    }

    public function testEditInfo()
    {
        $admin = \App\User::find(1);
        $info = factory('App\Info')->create();
        $info2 = factory('App\Info')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $info, $info2) {
            $browser->loginAs($admin)
                ->visit(route('admin.infos.index'))
                ->click('tr[data-entry-id="' . $info->id . '"] .btn-info')
                ->type("email_contato", $info2->email_contato)
                ->type("linked_in", $info2->linked_in)
                ->type("facebook", $info2->facebook)
                ->type("instagram", $info2->instagram)
                ->type("vimeo", $info2->vimeo)
                ->press('Update')
                ->assertRouteIs('admin.infos.index')
                ->assertSeeIn("tr:last-child td[field-key='email_contato']", $info2->email_contato)
                ->assertSeeIn("tr:last-child td[field-key='linked_in']", $info2->linked_in)
                ->assertSeeIn("tr:last-child td[field-key='facebook']", $info2->facebook)
                ->assertSeeIn("tr:last-child td[field-key='instagram']", $info2->instagram)
                ->assertSeeIn("tr:last-child td[field-key='vimeo']", $info2->vimeo)
                ->logout();
        });
    }

    public function testShowInfo()
    {
        $admin = \App\User::find(1);
        $info = factory('App\Info')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $info) {
            $browser->loginAs($admin)
                ->visit(route('admin.infos.index'))
                ->click('tr[data-entry-id="' . $info->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='email_contato']", $info->email_contato)
                ->assertSeeIn("td[field-key='linked_in']", $info->linked_in)
                ->assertSeeIn("td[field-key='facebook']", $info->facebook)
                ->assertSeeIn("td[field-key='instagram']", $info->instagram)
                ->assertSeeIn("td[field-key='vimeo']", $info->vimeo)
                ->logout();
        });
    }

}
