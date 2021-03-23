<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuontraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muontra', function (Blueprint $table) {
            $table->bigInteger('mt_id');
            $table->primary('mt_id');
            $table->string('mt_hoten');
            $table->string('mt_tensach');
            $table->string('mt_masach');
            $table->date('mt_ngaymuon');
            $table->date('mt_hantra');
            $table->bigInteger('ls_id')->unsigned();
            $table->foreign('ls_id')->references('ls_id')->on('loaisach')->onDelete('cascade');
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
        Schema::dropIfExists('muontra');
    }
}
