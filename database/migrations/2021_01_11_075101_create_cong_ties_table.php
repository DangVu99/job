<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongTiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cong_ties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_cong_ty');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->string('email');
            $table->text('mo_ta');
            $table->text('mo_ta_2');
            $table->string('logo');
            $table->string('website');
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
        Schema::dropIfExists('cong_ties');
    }
}
