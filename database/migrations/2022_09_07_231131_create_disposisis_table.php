<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisposisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();
            $table->string('perihal')->nullable();
            $table->date('tanggal_kirim')->nullable();
            $table->string('jenis')->nullable();
            $table->string('asal')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('nosurat')->nullable();
            $table->string('lampiran')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('hal')->nullable();
            $table->string('file')->nullable();
            $table->string('subjek')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('disposisis');
    }
}
