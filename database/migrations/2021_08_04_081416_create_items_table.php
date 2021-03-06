<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('itemCode');
            $table->string('itemName');
            $table->string('itemDescription');
            $table->integer('itemPrice');
            $table->string('itemWarrenty');
            $table->integer('itemQTY');
            $table->integer('itemDiscount');
            $table->string('itemMainCat');
            $table->string('itemSubCat');
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
        Schema::dropIfExists('items');
    }
}
