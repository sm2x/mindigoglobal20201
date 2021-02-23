<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('_for')->unsigned();
            $table->string('title');
            $table->string('category')->default('User Activity');
            $table->string('body');
            $table->bigInteger('_by')->unsigned()->nullable();
            $table->string('status')->default('unread');

            $table->foreign('_for')->references('id')->on('users');
            $table->foreign('_by')->references('id')->on('users');
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
        Schema::dropIfExists('notifications');
    }
}
