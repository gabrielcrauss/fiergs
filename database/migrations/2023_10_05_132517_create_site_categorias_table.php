<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->boolean('status')->default(1);

            $table->timestamps();

        });

        Schema::table('site_produtos', function (Blueprint $table) 
        {
            $table->foreign('id_categoria')->references('id')->on('site_categorias');
        });

        

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('site_produtos', function (Blueprint $table) 
        {
            $table->dropForeign('site_produtos_id_categoria_foreign');
            $table->dropColumn('id_categoria');
        });

        Schema::dropIfExists('site_categorias');
    }
};
