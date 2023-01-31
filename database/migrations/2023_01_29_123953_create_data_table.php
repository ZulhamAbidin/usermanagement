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
                /* $table->string('name'); */ $table->string('nama');
               /*  $table->string('email'); */ $table->string('alamat');
                /* $table->string('address'); */$table->string('nik');
                $table->string('jenis');
                $table->string('pendidikan');
                $table->string('jurusan');
                $table->string('hari');
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
