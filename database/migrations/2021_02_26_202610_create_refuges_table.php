<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refuges', function (Blueprint $table) {
            $table->id();
            $table->string("fullName");
            $table->integer("age");
            $table->string("gender");
            $table->string("allergies");
            $table->string("region");
            $table->integer("spouse_id");
            $table->integer("parent_id");
            $table->double("height");
            $table->double("weight");
            $table->string("illness");
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
        Schema::dropIfExists('refuges');
    }
}
