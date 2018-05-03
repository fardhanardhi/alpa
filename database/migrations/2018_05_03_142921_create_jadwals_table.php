<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('hari', ['Senin','Selasa','Rabu','Kamis','Jumat']);
            $table->integer('id_jamkul')->unsigned();
            $table->integer('id_kelas')->unsigned();
            $table->integer('id_matkul')->unsigned();
            $table->integer('id_dosen')->unsigned();
            $table->integer('id_ruangan')->unsigned();
            $table->timestamps();

            $table->foreign('id_jamkul')
                ->references('id')
                ->on('jamkuls')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_kelas')
                ->references('id')
                ->on('kelas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->foreign('id_matkul')
                ->references('id')
                ->on('matkuls')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_dosen')
                ->references('id')
                ->on('dosens')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_ruangan')
                ->references('id')
                ->on('ruangans')
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
        Schema::dropIfExists('jadwals');
    }
}
