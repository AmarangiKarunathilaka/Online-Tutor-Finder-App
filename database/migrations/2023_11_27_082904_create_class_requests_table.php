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
            $table->date('keydate')->nullable();
            $table->time('time')->nullable();
            $table->string('subject');
            $table->string('medium');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('student_registers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('student_name');
            $table->unsignedBigInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('tutor_registers')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tutor_name');
            $table->boolean('status')->default(0);
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
