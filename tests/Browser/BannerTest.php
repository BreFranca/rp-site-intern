<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class BannerTest extends DuskTestCase
{

    public function testCreateBanner()
    {
        $admin = \App\User::find(1);
        $banner = factory('App\Banner')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $banner) {
            $browser->loginAs($admin)
                ->visit(route('admin.banners.index'))
                ->clickLink('Add new')
                ->type("texto", $banner->texto)
                ->attach("banner", base_path("tests/_resources/test.jpg"))
                ->type("slug", $banner->slug)
                ->type("link", $banner->link)
                ->type("descricao", $banner->descricao)
                ->press('Save')
                ->assertRouteIs('admin.banners.index')
                ->assertSeeIn("tr:last-child td[field-key='texto']", $banner->texto)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\Banner::first()->banner . "']")
                ->assertSeeIn("tr:last-child td[field-key='slug']", $banner->slug)
                ->assertSeeIn("tr:last-child td[field-key='link']", $banner->link)
                ->assertSeeIn("tr:last-child td[field-key='descricao']", $banner->descricao)
                ->logout();
        });
    }

    public function testEditBanner()
    {
        $admin = \App\User::find(1);
        $banner = factory('App\Banner')->create();
        $banner2 = factory('App\Banner')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $banner, $banner2) {
            $browser->loginAs($admin)
                ->visit(route('admin.banners.index'))
                ->click('tr[data-entry-id="' . $banner->id . '"] .btn-info')
                ->type("texto", $banner2->texto)
                ->attach("banner", base_path("tests/_resources/test.jpg"))
                ->type("slug", $banner2->slug)
                ->type("link", $banner2->link)
                ->type("descricao", $banner2->descricao)
                ->press('Update')
                ->assertRouteIs('admin.banners.index')
                ->assertSeeIn("tr:last-child td[field-key='texto']", $banner2->texto)
                ->assertVisible("img[src='" . env("APP_URL") . "/" . env("UPLOAD_PATH") . "/thumb/" . \App\Banner::first()->banner . "']")
                ->assertSeeIn("tr:last-child td[field-key='slug']", $banner2->slug)
                ->assertSeeIn("tr:last-child td[field-key='link']", $banner2->link)
                ->assertSeeIn("tr:last-child td[field-key='descricao']", $banner2->descricao)
                ->logout();
        });
    }

    public function testShowBanner()
    {
        $admin = \App\User::find(1);
        $banner = factory('App\Banner')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $banner) {
            $browser->loginAs($admin)
                ->visit(route('admin.banners.index'))
                ->click('tr[data-entry-id="' . $banner->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='texto']", $banner->texto)
                ->assertSeeIn("td[field-key='slug']", $banner->slug)
                ->assertSeeIn("td[field-key='link']", $banner->link)
                ->assertSeeIn("td[field-key='descricao']", $banner->descricao)
                ->logout();
        });
    }

}
