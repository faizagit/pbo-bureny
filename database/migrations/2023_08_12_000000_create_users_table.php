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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas');
            $table->unsignedBigInteger('jurusan_id');
            $table->foreign('jurusan_id')->references('id')->on('jurusans');
            $table->unsignedBigInteger('ekskul1');
            $table->foreign('ekskul1')->references('id')->on('ekstrakurikulers');
            $table->unsignedBigInteger('ekskul2')->nullable();
            $table->foreign('ekskul2')->references('id')->on('ekstrakurikulers');
            $table->unsignedBigInteger('ekskul3')->nullable();
            $table->foreign('ekskul3')->references('id')->on('ekstrakurikulers');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
