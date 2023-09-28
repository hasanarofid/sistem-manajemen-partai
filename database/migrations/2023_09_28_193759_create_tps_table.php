<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tps', function (Blueprint $table) {
            $table->id();
            $table->string('no_tps');
            $table->string('rw')->nullable();
            $table->string('rt')->nullable();
            $table->bigInteger('kelurahan')->nullable();
            $table->bigInteger('kecamatan')->nullable();
            $table->bigInteger('kabupaten')->nullable();
            $table->integer('provinsi')->nullable();
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
        Schema::dropIfExists('tps');
    }
}
