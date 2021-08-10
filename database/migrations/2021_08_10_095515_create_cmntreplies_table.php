<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmntrepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cmntreplies', function (Blueprint $table) {
            $table->integer('replyid');
            $table->string('email');
            $table->string('answer');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('comments')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('cmntreplies');
    }
}
