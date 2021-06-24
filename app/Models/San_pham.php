<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class San_pham extends Model
{
    protected $table = 'san_pham';
    protected $fillable = [
    'id',
    'ten_san_pham',
    'ten_url',
    'hinh_san_pham',
    'gia_size_s',
    'gia_size_m',
    'giam_gia',
    'mo_ta_tom_tat',
    'chi_tiet',
    'trang_thai',
    'ma_loai',
    'san_pham_an_cung',
    'hot',
    'like'
  ];
}
