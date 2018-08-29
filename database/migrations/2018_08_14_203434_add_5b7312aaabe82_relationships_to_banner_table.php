<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b7312aaabe82RelationshipsToBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function(Blueprint $table) {
            if (!Schema::hasColumn('banners', 'categoria_id')) {
                $table->integer('categoria_id')->unsigned()->nullable();
                $table->foreign('categoria_id', '196438_5b7312aa37ba8')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::table('banners', function(Blueprint $table) {
            
        });
    }
}
