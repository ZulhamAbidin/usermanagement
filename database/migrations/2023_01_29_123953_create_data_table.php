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
    // public function up()
    // {
    //     Schema::create('data', function (Blueprint $table) {
    //         $table->id();
    //         $table->timestamps();
            
    //     });
    // }

        public function up()
        {
            Schema::create('data', function (Blueprint $table) {
                $table->id();
                $table->string('nama_lengkap');
                // $table->string('nik');
                $table->string('alamat_domisili');
                $table->string('jenis_kelamin');
                $table->string('pendidikan_terakhir');
                $table->string('jurusan');
                $table->string('tanggal_pengesahan');
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
        Schema::dropIfExists('data');
    }
};
