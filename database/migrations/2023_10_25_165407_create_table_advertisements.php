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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('tutorName');
            $table->string('email')->nullable();
            $table->string('payment');
            $table->string('imageUpload')->nullable();
            $table->text('description');
            $table->string('subject');
            $table->boolean('status')->default(0); // You can set a default status value.
            $table->unsignedInteger('tutor_id');
            $table->foreign('tutor_id')->references('id')->on('tutor_registers')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('advertisements');
    }
};
