<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThuthuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thuthu', function (Blueprint $table) {
            $table->bigIncrements('tt_id');
            $table->string('tt_hoten',150);
            $table->string('tt_gioitinh',150);
            $table->string('tt_diachi',150);
            $table->string('tt_sdt',150);
            $table->date('tt_ngaysinh',150);
            $table->string('username',150);
            $table->string('password',150);
            $table->bigInteger('q_id')->unsigned();
            $table->foreign('q_id')->references('q_id')->on('quyen')->onDelete('cascade');
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
        Schema::dropIfExists('thuthu');
    }
}
