<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1534872729DepoimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('depoimentos')) {
            Schema::create('depoimentos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('cliente')->nullable();
                $table->string('empresa')->nullable();
                $table->text('depoimento')->nullable();
                $table->text('slug')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depoimentos');
    }
}
