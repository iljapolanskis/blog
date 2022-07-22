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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('street');
            $table->string('city');
            $table->string('district');
            $table->string('images');
            $table->string('location');
            $table->unsignedTinyInteger('rooms');
            $table->unsignedTinyInteger('floor');
            $table->unsignedTinyInteger('floors');
            $table->unsignedDecimal('price');
            $table->unsignedSmallInteger('area');
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
        Schema::dropIfExists('apartments');
    }
};
