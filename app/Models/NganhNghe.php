<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NganhNghe extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nganh_nghes';

    protected $fillable = ['ten_nganh-nghe'];
}
