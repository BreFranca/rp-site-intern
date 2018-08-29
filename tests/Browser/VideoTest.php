<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class VideoTest extends DuskTestCase
{

    public function testCreateVideo()
    {
        $admin = \App\User::find(1);
        $video = factory('App\Video')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $video) {
            $browser->loginAs($admin)
                ->visit(route('admin.videos.index'))
                ->clickLink('Add new')
                ->type("titulo", $video->titulo)
                ->type("texto", $video->texto)
                ->type("url", $video->url)
                ->press('Save')
                ->assertRouteIs('admin.videos.index')
                ->assertSeeIn("tr:last-child td[field-key='titulo']", $video->titulo)
                ->assertSeeIn("tr:last-child td[field-key='texto']", $video->texto)
                ->assertSeeIn("tr:last-child td[field-key='url']", $video->url)
                ->logout();
        });
    }

    public function testEditVideo()
    {
        $admin = \App\User::find(1);
        $video = factory('App\Video')->create();
        $video2 = factory('App\Video')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $video, $video2) {
            $browser->loginAs($admin)
                ->visit(route('admin.videos.index'))
                ->click('tr[data-entry-id="' . $video->id . '"] .btn-info')
                ->type("titulo", $video2->titulo)
                ->type("texto", $video2->texto)
                ->type("url", $video2->url)
                ->press('Update')
                ->assertRouteIs('admin.videos.index')
                ->assertSeeIn("tr:last-child td[field-key='titulo']", $video2->titulo)
                ->assertSeeIn("tr:last-child td[field-key='texto']", $video2->texto)
                ->assertSeeIn("tr:last-child td[field-key='url']", $video2->url)
                ->logout();
        });
    }

    public function testShowVideo()
    {
        $admin = \App\User::find(1);
        $video = factory('App\Video')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $video) {
            $browser->loginAs($admin)
                ->visit(route('admin.videos.index'))
                ->click('tr[data-entry-id="' . $video->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='titulo']", $video->titulo)
                ->assertSeeIn("td[field-key='texto']", $video->texto)
                ->assertSeeIn("td[field-key='url']", $video->url)
                ->logout();
        });
    }

}
