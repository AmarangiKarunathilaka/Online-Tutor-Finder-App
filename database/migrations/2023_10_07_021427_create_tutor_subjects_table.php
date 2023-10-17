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
        Schema::create('tutorSubjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutorSubject_id');
            $table->foreign('tutorSubject_id')->references('id')->on('tutorRegisters');
            $table->string('tutorSubject')->nullable();
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
        Schema::dropIfExists('tutorSubjects');
    }
};
