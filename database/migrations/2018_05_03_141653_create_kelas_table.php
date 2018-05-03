<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_prodi')->unsigned();
            $table->integer('id_tingkatan')->unsigned();
            $table->char('huruf', 1);
            $table->timestamps();

            $table->foreign('id_prodi')
                ->references('id')
                ->on('prodis')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_tingkatan')
                ->references('id')
                ->on('tingkatans')
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
        Schema::dropIfExists('kelas');
    }
}
