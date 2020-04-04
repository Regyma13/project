<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('npm', 7)->unique();
            $table->string('kelamin');
            $table->string('tempatlahir')->nullable();
            $table->date('tanggallahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('email')->unique();
            $table->string('jurusan');
            $table->string('kelas');
            $table->string('password')->nullable();
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
        Schema::dropIfExists('students');
    }
}
