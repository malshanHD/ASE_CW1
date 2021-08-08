<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyer_users', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->date('dob');
            $table->integer('phnNumber');
            $table->string('country');
            $table->string('streetadd01');
            $table->string('streetadd02');
            $table->string('city');
            $table->string('province');
            $table->integer('zipcode');
            $table->string('profilePicture');
            $table->string('username');
            $table->string('password');
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
        Schema::dropIfExists('buyer_users');
    }
}
