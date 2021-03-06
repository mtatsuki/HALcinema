<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleaseDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'release_details', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('movie_id')->unsigned();
                $table->time('screening_time');
                $table->enum('screen_type', ['A', 'B']);
                $table->timestamps();
                
                $table->foreign('movie_id')
                    ->references('id')
                    ->on('movies'); 
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('release_details');
    }
}
