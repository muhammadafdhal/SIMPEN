<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('jk_pen', ['laki-laki','perempuan']);
            $table->string('tempat_lahir_pen');
            $table->date('tgl_lahir_pen');
            $table->enum('agama_pen', ['islam','kristen','katolik','protestan','hindu','budha']);
            $table->bigInteger('anak_ke');
            $table->string('nama_ayah_pen');
            $table->string('nama_ibu_pen');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('alamat');
            $table->bigInteger('no_hp');
            $table->enum('status', ['menunggu','ditolak','diterima']);
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
