<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docgia', function (Blueprint $table) {
            $table->bigIncrements('dg_id');
            $table->string('dg_hoten',150);
            $table->string('dg_gioitinh',150);
            $table->string('dg_diachi',150);
            $table->string('dg_sdt',150);
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
        Schema::dropIfExists('docgia');
    }
}
