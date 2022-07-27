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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();

            $table->string('link_img', 255);
            $table->string('name', 255);
            $table->text('status');
            $table->text('director');
            $table->text('national');
            $table->string('released', 4);
            $table->string('timing', 100);
            $table->string('view', 100);
            $table->text('description');
            $table->string('slug', 255);

            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')->references('id')->on('categories')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
