<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMengajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mengajars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dosen')->unsigned();
            $table->integer('id_matkul')->unsigned();
            $table->timestamps();

            $table->foreign('id_dosen')
                ->references('id')
                ->on('dosens')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_matkul')
                ->references('id')
                ->on('matkuls')
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
        Schema::dropIfExists('mengajars');
    }
}
