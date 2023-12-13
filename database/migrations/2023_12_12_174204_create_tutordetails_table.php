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
        Schema::create('tutordetails', function (Blueprint $table) {
            $table->id();
            $table->string('tutorFullName');
            $table->string('tutorEmail');
            $table->string('tutorPhoneNumber');
            $table->string('qualification');
            $table->string('subject');
            $table->string('medium');
            $table->unsignedBigInteger('tutor_id');

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
        Schema::dropIfExists('tutordetails');
    }
};
