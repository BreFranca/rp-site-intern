<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1534268560BannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            
if (!Schema::hasColumn('banners', 'link1')) {
                $table->string('link1')->nullable();
                }
if (!Schema::hasColumn('banners', 'link2')) {
                $table->string('link2')->nullable();
                }
if (!Schema::hasColumn('banners', 'link3')) {
                $table->string('link3')->nullable();
                }
if (!Schema::hasColumn('banners', 'link4')) {
                $table->string('link4')->nullable();
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
            $table->dropColumn('link1');
            $table->dropColumn('link2');
            $table->dropColumn('link3');
            $table->dropColumn('link4');
            
        });

    }
}
