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
        Schema::create('tutorRegisters', function (Blueprint $table) {
            $table->id();
            $table->string('tutorFullName');
            $table->string('tutorPhoneNumber');
            $table->string('qualification');
            $table->string('tutorEmail')->unique();
            $table->string('tutorPassword');
            $table->string('tutorConfirmPassword');
            $table->timestamps();

            //In tutorSubject and tutorMedium tables
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutorRegisters');
    }
};
