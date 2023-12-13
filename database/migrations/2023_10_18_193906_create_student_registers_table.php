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
        Schema::create('student_registers', function (Blueprint $table) {
                
                $table->id();
                $table->string('studentFullName');
                $table->date('birthday');
                $table->string('address');
                $table->string('studentPhoneNumber')->nullable;
                $table->string('studentEmail')->unique();
                $table->string('password');
                $table->string('studentConfirmPassword')->nullable();
                $table->string('status')->default('pending');
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
        Schema::dropIfExists('student_registers');
    }
};
