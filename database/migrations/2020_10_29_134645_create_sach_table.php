<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->bigIncrements('s_id');
            $table->string('s_masach',150);
            $table->string('s_ten',150);
            $table->integer('s_soluong');
            $table->string('s_mota',200);
            $table->string('s_tacgia',200);
            $table->string('s_tinhtrang',250);


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
        Schema::dropIfExists('sach');
    }
}
