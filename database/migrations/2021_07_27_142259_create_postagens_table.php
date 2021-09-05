<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postagens', function (Blueprint $table) {
            $table->id();
            $table->string('o_que_vai_doar', 255);
            
            $table->string('tipo');
            $table->integer('quantidade');
            $table->string('telefone');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');

            $table->foreignId('user_id')->constrained();


            $table->string('imagem')->nullable()-> default();

            

            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postagens');
    }
}
