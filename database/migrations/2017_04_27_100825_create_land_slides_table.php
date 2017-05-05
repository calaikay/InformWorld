<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('land_slides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->date('date');
            $table->string('time');
            $table->string('nearest_places');
            $table->string('landslide_type');
            $table->string('reason');
            $table->string('description');
            $table->string('accuracy');
            $table->text('photo'); 
            $table->integer('user_id');
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
        Schema::dropIfExists('land_slides');
    }
}
