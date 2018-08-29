<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1534270865BannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            if(Schema::hasColumn('banners', 'banner1')) {
                $table->dropColumn('banner1');
            }
            if(Schema::hasColumn('banners', 'link1')) {
                $table->dropColumn('link1');
            }
            if(Schema::hasColumn('banners', 'slug1')) {
                $table->dropColumn('slug1');
            }
            if(Schema::hasColumn('banners', 'banner2')) {
                $table->dropColumn('banner2');
            }
            if(Schema::hasColumn('banners', 'link2')) {
                $table->dropColumn('link2');
            }
            if(Schema::hasColumn('banners', 'slug2')) {
                $table->dropColumn('slug2');
            }
            if(Schema::hasColumn('banners', 'banner3')) {
                $table->dropColumn('banner3');
            }
            if(Schema::hasColumn('banners', 'link3')) {
                $table->dropColumn('link3');
            }
            if(Schema::hasColumn('banners', 'slug3')) {
                $table->dropColumn('slug3');
            }
            if(Schema::hasColumn('banners', 'banner4')) {
                $table->dropColumn('banner4');
            }
            if(Schema::hasColumn('banners', 'link4')) {
                $table->dropColumn('link4');
            }
            if(Schema::hasColumn('banners', 'slug4')) {
                $table->dropColumn('slug4');
            }
            
        });
Schema::table('banners', function (Blueprint $table) {
            
if (!Schema::hasColumn('banners', 'banner')) {
                $table->string('banner')->nullable();
                }
if (!Schema::hasColumn('banners', 'slug')) {
                $table->string('slug')->nullable();
                }
if (!Schema::hasColumn('banners', 'link')) {
                $table->string('link')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn('banner');
            $table->dropColumn('slug');
            $table->dropColumn('link');
            
        });
Schema::table('banners', function (Blueprint $table) {
                        $table->string('banner1')->nullable();
                $table->string('link1')->nullable();
                $table->string('slug1')->nullable();
                $table->string('banner2')->nullable();
                $table->string('link2')->nullable();
                $table->string('slug2')->nullable();
                $table->string('banner3')->nullable();
                $table->string('link3')->nullable();
                $table->string('slug3')->nullable();
                $table->string('banner4')->nullable();
                $table->string('link4')->nullable();
                $table->string('slug4')->nullable();
                
        });

    }
}
