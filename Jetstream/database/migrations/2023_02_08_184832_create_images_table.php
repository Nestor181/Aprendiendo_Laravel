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
        Schema::create('images', function (Blueprint $table) {
            //Relacion uno a uno polimorfica (V.44)
               
            $table->string('url');

            $table->unsignedBigInteger('imageable_id');
            $table->string('imageable_type');

            $table->primary(['imageable_id', 'imageable_type']);//Creacion de llave compuesta (V.44)

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
        Schema::dropIfExists('images');
    }
};
