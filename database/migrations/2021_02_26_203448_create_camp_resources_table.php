<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_resources', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("type");
            $table->string("measurement");
            $table->integer("start_target_age");
            $table->integer("end_target_age");
            $table->integer("camp_id");
            $table->string("target_gender");
            $table->string("description");
            $table->double("unit_per_refuge");
            $table->integer("quantity");
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
        Schema::dropIfExists('camp_resources');
    }
}
