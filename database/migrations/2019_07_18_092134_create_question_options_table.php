<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('question_id')->unsigned()->nullable();
            //$table->foreign('question_id', '54421_596eee8745a1e')->references('id')->on('questions')->onDelete('cascade');
            $table->text('option_text');
            $table->tinyInteger('correct')->nullable()->default(0);
            $table->text('option_text2');
            $table->tinyInteger('correct2')->nullable()->default(0);
            $table->text('option_text3');
            $table->tinyInteger('correct3')->nullable()->default(0);
            $table->text('option_text4');
            $table->tinyInteger('correct4')->nullable()->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index(['deleted_at']);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_options');
    }
}
