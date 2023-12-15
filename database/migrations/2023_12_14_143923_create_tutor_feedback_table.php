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
        Schema::create('tutor_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('tutor');
            $table->integer('rating');
            $table->string('name');
            $table->string('email')->nullable();
            $table->text('message');
            $table->string('status')->default('pending'); // You can set a default status value.            
            $table->unsignedBigInteger('student_id');
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
        Schema::dropIfExists('tutor_feedback');
    }
};
