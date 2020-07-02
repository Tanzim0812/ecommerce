<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('ip_address')->nullable();
            $table->integer('phone');
            $table->string('email')->nullable();
            $table->string('shipping_add');
            $table->text('message')->nullable();
            $table->tinyInteger('is_paid')->default('0');
            $table->tinyInteger('is_completed')->default('0');
            $table->timestamps();

            $table->foreign('user_id')->
            references('id')->
            on('users')->
            onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
