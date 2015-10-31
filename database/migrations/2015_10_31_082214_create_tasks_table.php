<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employer_id')->unsigned();
            $table->integer('middleman_id')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->integer('noOfPeople');
            $table->integer('noOfDays');
            $table->float('budget');
            $table->boolean('status')->default(true);
            $table->boolean('reviewed')->default(false);
            $table->string('siteDetails', 20);
            $table->timestamps();

            $table->foreign('employer_id')
                    ->references('id')
                    ->on('employers')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tasks');
    }
}
