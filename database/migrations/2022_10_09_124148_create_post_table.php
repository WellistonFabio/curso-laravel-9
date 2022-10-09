<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');//fazendo relacionamento com a tabela user e o id, com alteração e exclusão
            $table->string('title');//cria coluna string, nome title, que não pode ser null
            $table->longText('body');//cria longText string, nome body, que não pode ser null
            $table->string('tags')->nullable();//cria coluna string, nome tags, que pode ser null
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
        Schema::dropIfExists('posts');
    }
};
