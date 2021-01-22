<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CongTy extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cong_ties';

    protected $fillable = ['ten_cong_ty','dia_chi','so_dien_thoai','email','mo_ta','logo','website','mo_ta_2'];
}
