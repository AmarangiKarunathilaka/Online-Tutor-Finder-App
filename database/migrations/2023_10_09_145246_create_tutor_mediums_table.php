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
        Schema::create('tutor_mediums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tutorMedium_id')->nullable();
            $table->foreign('tutorMedium_id')->references('id')->on('tutor_registers');
            $table->string('tutorMedium')->nullable();
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
        Schema::dropIfExists('tutor_mediums');
    }
};
