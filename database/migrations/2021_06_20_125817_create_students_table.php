<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stu_name');
            $table->string('email');
            $table->string('fname');
            $table->string('gender');
            $table->text('address');
            $table->string('contact_no');
            $table->double('paid_amount');
            $table->double('due_amount');
            $table->integer('course_id')->unsigned();
            $table->string('send_money_number');
            $table->string('trxt_id');
            $table->string('password');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('students');
    }
}
