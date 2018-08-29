<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class CategoriaTest extends DuskTestCase
{

    public function testCreateCategoria()
    {
        $admin = \App\User::find(1);
        $categoria = factory('App\Categoria')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $categoria) {
            $browser->loginAs($admin)
                ->visit(route('admin.categorias.index'))
                ->clickLink('Add new')
                ->type("categoria", $categoria->categoria)
                ->type("slug", $categoria->slug)
                ->press('Save')
                ->assertRouteIs('admin.categorias.index')
                ->assertSeeIn("tr:last-child td[field-key='categoria']", $categoria->categoria)
                ->assertSeeIn("tr:last-child td[field-key='slug']", $categoria->slug)
                ->logout();
        });
    }

    public function testEditCategoria()
    {
        $admin = \App\User::find(1);
        $categoria = factory('App\Categoria')->create();
        $categoria2 = factory('App\Categoria')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $categoria, $categoria2) {
            $browser->loginAs($admin)
                ->visit(route('admin.categorias.index'))
                ->click('tr[data-entry-id="' . $categoria->id . '"] .btn-info')
                ->type("categoria", $categoria2->categoria)
                ->type("slug", $categoria2->slug)
                ->press('Update')
                ->assertRouteIs('admin.categorias.index')
                ->assertSeeIn("tr:last-child td[field-key='categoria']", $categoria2->categoria)
                ->assertSeeIn("tr:last-child td[field-key='slug']", $categoria2->slug)
                ->logout();
        });
    }

    public function testShowCategoria()
    {
        $admin = \App\User::find(1);
        $categoria = factory('App\Categoria')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $categoria) {
            $browser->loginAs($admin)
                ->visit(route('admin.categorias.index'))
                ->click('tr[data-entry-id="' . $categoria->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='categoria']", $categoria->categoria)
                ->assertSeeIn("td[field-key='slug']", $categoria->slug)
                ->logout();
        });
    }

}
