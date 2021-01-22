<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ViecLam extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'viec_lams';

    protected $fillable = ['ten_viec_lam','cong_ty', 'mo_ta', 'yeu_cau','dia_chi', 'ngay_het_han','ten_nganh_nghe','mo_ta_2','luong'];
}
