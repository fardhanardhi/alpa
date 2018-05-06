<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_absens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mahasiswa')->unsigned();
            $table->integer('id_jadwal')->unsigned();
            $table->enum('status', ['M', 'S', 'I', 'A']);
            $table->integer('jumlah_jam')->nullable();
            $table->timestamps();

            $table->foreign('id_mahasiswa')
                ->references('id')
                ->on('mahasiswas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->foreign('id_jadwal')
                ->references('id')
                ->on('jadwals')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_absens');
    }
}
