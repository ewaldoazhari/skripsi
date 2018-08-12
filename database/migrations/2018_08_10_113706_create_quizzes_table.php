<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('video_id')->unsigned()->nullable();
            $table->string('jawaban1')->nullable();
            $table->string('jawaban2')->nullable();
            $table->string('jawaban3')->nullable();
            $table->string('jawaban_benar')->nullable();
            $table->text('pertanyaan')->nullable();
            $table->timestamps();
            $table->foreign('video_id')
                ->references('id')->on('videos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
