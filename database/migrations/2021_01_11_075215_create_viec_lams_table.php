<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViecLamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viec_lams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cong_ty');
            $table->string('ten_viec_lam');
            $table->string('ten_nganh_nghe');
            $table->text('mo_ta');
            $table->text('mo_ta_2');
            $table->string('yeu_cau');
            $table->string('luong');
            $table->string('dia_chi');
            $table->date('ngay_het_han');
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
        Schema::dropIfExists('viec_lams');
    }
}
