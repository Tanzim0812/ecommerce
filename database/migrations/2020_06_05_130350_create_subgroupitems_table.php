<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubgroupitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subgroupitems', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->integer('grp_id');
            $table->string('subgroup_name',255);
            $table->string('subgroup_slug',255);
            $table->tinyInteger('subgroup_status')->default('0');
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
        Schema::dropIfExists('subgroupitems');
    }
}
