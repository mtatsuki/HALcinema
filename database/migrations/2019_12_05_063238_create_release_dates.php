<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleaseDates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'release_dates', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('detail_id')->unsigned();
                $table->date('release_date');
                $table->timestamps();

                $table->foreign('detail_id')
                    ->references('id')
                    ->on('release_details'); 
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
        Schema::dropIfExists('release_dates');
    }
}
