<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1534268074BannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            if(Schema::hasColumn('banners', 'imagens')) {
                $table->dropColumn('imagens');
            }
            
        });
Schema::table('banners', function (Blueprint $table) {
            
if (!Schema::hasColumn('banners', 'banner1')) {
                $table->string('banner1')->nullable();
                }
if (!Schema::hasColumn('banners', 'banner2')) {
                $table->string('banner2')->nullable();
                }
if (!Schema::hasColumn('banners', 'banner3')) {
                $table->string('banner3')->nullable();
                }
if (!Schema::hasColumn('banners', 'banner4')) {
                $table->string('banner4')->nullable();
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
            $table->dropColumn('banner1');
            $table->dropColumn('banner2');
            $table->dropColumn('banner3');
            $table->dropColumn('banner4');
            
        });
Schema::table('banners', function (Blueprint $table) {
                        
        });

    }
}
