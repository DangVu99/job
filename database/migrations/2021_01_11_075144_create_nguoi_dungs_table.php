<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiDungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_dungs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_nguoi_dung');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->string('email');
            $table->date('ngay_sinh');
            $table->string('gioi_tinh');
            $table->string('linh_vuc');
            $table->string('ky_nang');
            $table->string('kinh_nghiem');
            $table->string('hinh_anh');
            $table->text('mo_ta');
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
        Schema::dropIfExists('nguoi_dungs');
    }
}
