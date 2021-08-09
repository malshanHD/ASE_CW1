<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_infos', function (Blueprint $table) {
            $table->id();
            $table->string('comapnyname');
            $table->string('email');
            $table->integer('contactno');
            $table->string('country');
            $table->string('streetadd01');
            $table->string('streetadd02');
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode');
            $table->string('profilePicture');
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
        Schema::dropIfExists('seller_infos');
    }
}
