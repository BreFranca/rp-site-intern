<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1534268958BannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            if(Schema::hasColumn('banners', 'categoria_id')) {
                $table->dropForeign('196438_5b7312aa37ba8');
                $table->dropIndex('196438_5b7312aa37ba8');
                $table->dropColumn('categoria_id');
            }
            
        });
Schema::table('banners', function (Blueprint $table) {
            
if (!Schema::hasColumn('banners', 'slug1')) {
                $table->string('slug1')->nullable();
                }
if (!Schema::hasColumn('banners', 'slug2')) {
                $table->string('slug2')->nullable();
                }
if (!Schema::hasColumn('banners', 'slug3')) {
                $table->string('slug3')->nullable();
                }
if (!Schema::hasColumn('banners', 'slug4')) {
                $table->string('slug4')->nullable();
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
            $table->dropColumn('slug1');
            $table->dropColumn('slug2');
            $table->dropColumn('slug3');
            $table->dropColumn('slug4');
            
        });
Schema::table('banners', function (Blueprint $table) {
                        
        });

    }
}
