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
            $table->string('Mathematics')->nullable();
            $table->string('Biology')->nullable();
            $table->string('Chemistry')->nullable();
            $table->string('Physics')->nullable();
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
