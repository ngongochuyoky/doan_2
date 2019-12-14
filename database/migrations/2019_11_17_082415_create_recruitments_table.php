<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->bigIncrements('id_recruitment');
            $table->string('Wage')->default('7 triệu'); //lương
            $table->string('Experience'); //kinh nghiệm
            $table->string('Degree requirements'); //yêu cầu bằng cấp
            $table->string('Number of vacancies'); //số lượng cần tuyển
            $table->string('Industry')->default('Dev Font-end'); //ngành nghề
            $table->string('Work location')->default('Tại công ty ABC,Hòa Quý,Ngũ Hành Sơn,Đà Nẵng');
            $table->string('Working form')->default('Full time');
            $table->string('Probationary period')->default('3 tháng'); //thời gian thử việc
            $table->string('Gender requirement')->default('Không yêu cầu'); //yêu cầu giới tính
            $table->string('Age requirement')->default('trên 18 tuổi');
            $table->softDeletes();
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
        Schema::dropIfExists('recruitments');
    }
}
