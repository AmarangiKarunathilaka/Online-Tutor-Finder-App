<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_requests', function (Blueprint $table) {
            $table->id();
            $table->string('tutorFullName');
            $table->string('studentName');
            $table->string('subject');
            $table->string('medium');
            $table->string('day');
            $table->string('time');
            $table->unsignedBigInteger('tutor_id');
            $table->unsignedBigInteger('student_id');
            $table->string('status')->default('pending');

            $table->foreign('tutor_id')->references('id')->on('tutor_registers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('student_registers')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('class_requests');
    }
};
