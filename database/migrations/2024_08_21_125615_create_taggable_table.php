<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Esta tabla se crea solo como migración (no modelo) dado que es una tabla de relación muchos a muchos, utilizada en el ejemplo de relación polimórfica.
    // Un tag puede estar relacionado tanto a una persona como a un video
    //Se crea mediante el comando > php artisan make:migration create_taggables_table
    public function up(): void
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id'); //el id del tag
            $table->unsignedBigInteger('taggable_id'); //puede ser un id de usuario o de un post
            $table->string('taggable_type'); //el tipo de taggable, en este caso, User:class o Post:class
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taggable');
    }
};
