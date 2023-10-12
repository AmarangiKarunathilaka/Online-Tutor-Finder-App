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
            //$table->string('tutorSubject')->nullable();
            //$table->string('tutorMedium')->nullable();
            $table->string('tutorEmail')->unique();
            $table->string('tutorPassword');
            $table->string('tutorConfirmPassword');
            $table->timestamps();

            //In tutorSubject and tutorMedium tables
            $table->unsignedBigInteger('tutorSubject_id');
            $table->unsignedBigInteger('tutorMedium_id');

            // Foreign keys
            $table->foreign('tutorSubject_id')->references('id')->on('tutorSubject');
            $table->foreign('tutorMedium_id')->references('id')->on('tutorMedium');

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
