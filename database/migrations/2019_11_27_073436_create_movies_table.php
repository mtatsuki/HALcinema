<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'movies', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');            // 映画タイトル
                $table->text('synopsis');           // あらすじ
                $table->string('director');         // 監督
                $table->text('star');               // 主演
                $table->integer('running_total_time');    // 上映時間
                $table->string('official_url');     // 公式url
                $table->string('image_url');        // 公式画像url
                $table->timestamps();
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
        Schema::dropIfExists('movies');
    }
}
