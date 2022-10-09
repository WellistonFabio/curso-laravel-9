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
        Schema::table('posts', function (Blueprint $table) {
//          Incluir a coluna (cover)
            $table->string('cover')->nullable()->after('title');// comando affter inclui a coluna após a coluna title
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
//          Apagar a coluna (cover)
            $table->dropColumn('cover');
        });
    }
};
