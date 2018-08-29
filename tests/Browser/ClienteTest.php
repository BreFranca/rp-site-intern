<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class ClienteTest extends DuskTestCase
{

    public function testCreateCliente()
    {
        $admin = \App\User::find(1);
        $cliente = factory('App\Cliente')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $cliente) {
            $browser->loginAs($admin)
                ->visit(route('admin.clientes.index'))
                ->clickLink('Add new')
                ->type("nome", $cliente->nome)
                ->attach("imagem", base_path("tests/_resources/test.jpg"))
                ->press('Save')
                ->assertRouteIs('admin.clientes.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $cliente->nome)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\Cliente::first()->imagem . "']")
                ->logout();
        });
    }

    public function testEditCliente()
    {
        $admin = \App\User::find(1);
        $cliente = factory('App\Cliente')->create();
        $cliente2 = factory('App\Cliente')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $cliente, $cliente2) {
            $browser->loginAs($admin)
                ->visit(route('admin.clientes.index'))
                ->click('tr[data-entry-id="' . $cliente->id . '"] .btn-info')
                ->type("nome", $cliente2->nome)
                ->attach("imagem", base_path("tests/_resources/test.jpg"))
                ->press('Update')
                ->assertRouteIs('admin.clientes.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $cliente2->nome)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\Cliente::first()->imagem . "']")
                ->logout();
        });
    }

    public function testShowCliente()
    {
        $admin = \App\User::find(1);
        $cliente = factory('App\Cliente')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $cliente) {
            $browser->loginAs($admin)
                ->visit(route('admin.clientes.index'))
                ->click('tr[data-entry-id="' . $cliente->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='nome']", $cliente->nome)
                ->logout();
        });
    }

}
