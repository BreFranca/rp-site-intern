<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5b7db3528e835RelationshipsToAtividadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atividades', function(Blueprint $table) {
            if (!Schema::hasColumn('atividades', 'categoria_id')) {
                $table->integer('categoria_id')->unsigned()->nullable();
                $table->foreign('categoria_id', '196440_5b72f7ccbd1e4')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::table('atividades', function(Blueprint $table) {
            if(Schema::hasColumn('atividades', 'categoria_id')) {
                $table->dropForeign('196440_5b72f7ccbd1e4');
                $table->dropIndex('196440_5b72f7ccbd1e4');
                $table->dropColumn('categoria_id');
            }
            
        });
    }
}