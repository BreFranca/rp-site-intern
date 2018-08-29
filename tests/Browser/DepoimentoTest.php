<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class DepoimentoTest extends DuskTestCase
{

    public function testCreateDepoimento()
    {
        $admin = \App\User::find(1);
        $depoimento = factory('App\Depoimento')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $depoimento) {
            $browser->loginAs($admin)
                ->visit(route('admin.depoimentos.index'))
                ->clickLink('Add new')
                ->type("cliente", $depoimento->cliente)
                ->type("empresa", $depoimento->empresa)
                ->type("depoimento", $depoimento->depoimento)
                ->press('Save')
                ->assertRouteIs('admin.depoimentos.index')
                ->assertSeeIn("tr:last-child td[field-key='cliente']", $depoimento->cliente)
                ->assertSeeIn("tr:last-child td[field-key='empresa']", $depoimento->empresa)
                ->assertSeeIn("tr:last-child td[field-key='depoimento']", $depoimento->depoimento)
                ->logout();
        });
    }

    public function testEditDepoimento()
    {
        $admin = \App\User::find(1);
        $depoimento = factory('App\Depoimento')->create();
        $depoimento2 = factory('App\Depoimento')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $depoimento, $depoimento2) {
            $browser->loginAs($admin)
                ->visit(route('admin.depoimentos.index'))
                ->click('tr[data-entry-id="' . $depoimento->id . '"] .btn-info')
                ->type("cliente", $depoimento2->cliente)
                ->type("empresa", $depoimento2->empresa)
                ->type("depoimento", $depoimento2->depoimento)
                ->press('Update')
                ->assertRouteIs('admin.depoimentos.index')
                ->assertSeeIn("tr:last-child td[field-key='cliente']", $depoimento2->cliente)
                ->assertSeeIn("tr:last-child td[field-key='empresa']", $depoimento2->empresa)
                ->assertSeeIn("tr:last-child td[field-key='depoimento']", $depoimento2->depoimento)
                ->logout();
        });
    }

    public function testShowDepoimento()
    {
        $admin = \App\User::find(1);
        $depoimento = factory('App\Depoimento')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $depoimento) {
            $browser->loginAs($admin)
                ->visit(route('admin.depoimentos.index'))
                ->click('tr[data-entry-id="' . $depoimento->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='cliente']", $depoimento->cliente)
                ->assertSeeIn("td[field-key='empresa']", $depoimento->empresa)
                ->assertSeeIn("td[field-key='depoimento']", $depoimento->depoimento)
                ->logout();
        });
    }

}
