<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class AtividadeTest extends DuskTestCase
{

    public function testCreateAtividade()
    {
        $admin = \App\User::find(1);
        $atividade = factory('App\Atividade')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $atividade) {
            $browser->loginAs($admin)
                ->visit(route('admin.atividades.index'))
                ->clickLink('Add new')
                ->type("nome", $atividade->nome)
                ->type("texto", $atividade->texto)
                ->select("categoria_id", $atividade->categoria_id)
                ->press('Save')
                ->assertRouteIs('admin.atividades.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $atividade->nome)
                ->assertSeeIn("tr:last-child td[field-key='texto']", $atividade->texto)
                ->assertSeeIn("tr:last-child td[field-key='categoria']", $atividade->categoria->categoria)
                ->logout();
        });
    }

    public function testEditAtividade()
    {
        $admin = \App\User::find(1);
        $atividade = factory('App\Atividade')->create();
        $atividade2 = factory('App\Atividade')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $atividade, $atividade2) {
            $browser->loginAs($admin)
                ->visit(route('admin.atividades.index'))
                ->click('tr[data-entry-id="' . $atividade->id . '"] .btn-info')
                ->type("nome", $atividade2->nome)
                ->type("texto", $atividade2->texto)
                ->select("categoria_id", $atividade2->categoria_id)
                ->press('Update')
                ->assertRouteIs('admin.atividades.index')
                ->assertSeeIn("tr:last-child td[field-key='nome']", $atividade2->nome)
                ->assertSeeIn("tr:last-child td[field-key='texto']", $atividade2->texto)
                ->assertSeeIn("tr:last-child td[field-key='categoria']", $atividade2->categoria->categoria)
                ->logout();
        });
    }

    public function testShowAtividade()
    {
        $admin = \App\User::find(1);
        $atividade = factory('App\Atividade')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $atividade) {
            $browser->loginAs($admin)
                ->visit(route('admin.atividades.index'))
                ->click('tr[data-entry-id="' . $atividade->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='nome']", $atividade->nome)
                ->assertSeeIn("td[field-key='texto']", $atividade->texto)
                ->assertSeeIn("td[field-key='categoria']", $atividade->categoria->categoria)
                ->logout();
        });
    }

}
