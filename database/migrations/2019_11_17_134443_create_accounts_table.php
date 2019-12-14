<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('gender')->nullable()->default('nam');
            $table->date('date_of_birth')->nullable()->default('2000/10/1');
            $table->integer('phone')->nullable()->default('0905606287');
            $table->string('city')->nullable()->default('Đà Nẵng');
            $table->integer('country_id')->nullable()->default('65'); 
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
        Schema::dropIfExists('accounts');
    }
}
