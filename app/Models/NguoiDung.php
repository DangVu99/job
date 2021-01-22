<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NguoiDung extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nguoi_dungs';

    protected $fillable = ['ten_nguoi_dung','dia_chi','so_dien_thoai','email','ngay_sinh','gioi_tinh','linh_vuc','ky_nang','kinh_nghiem','hinh_anh','mo_ta'];
}
