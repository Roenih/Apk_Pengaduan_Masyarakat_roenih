<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('nik', 20)->nullable();
            $table->string('nama', 30)->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('telp', 20)->nullable();
            $table->enum('jenkel',['laki-laki','perempuan'])->nullable();
            $table->enum('level',['admin','petugas','user'])->nullable();
            $table->text('alamat')->nullable();
            $table->string('rt', 10)->nullable();
            $table->string('rw', 10)->nullable();
            $table->string('kode_pos', 10)->nullable();
            $table->string('province_id', 10)->nullable();
            $table->string('regency_id', 10)->nullable();
            $table->string('district_id', 10)->nullable();
            $table->string('village_id', 10)->nullable();
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
}
