<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $$table->increments('id');
            $table->timestamps();
            $table->timestamp('dos');
            $table->integer('laundry_weight')->nullable();;
            $table->string('dryclean');
            $table->integer('user_id');
            $table->integer('sp_id');
            $table->integer('service_id');
            $table->string('voucher');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
