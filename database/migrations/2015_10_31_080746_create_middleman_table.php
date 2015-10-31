<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiddlemanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('middlemans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone', 15);
            $table->string('email', 30);
            $table->integer('age');
            $table->string('gender', 8);
            $table->string('village')->nullable();
            $table->boolean('approved')->default(false);
            $table->boolean('active')->default(true);
            $table->string('resume');
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
        Schema::drop('middlemans');
    }
}
