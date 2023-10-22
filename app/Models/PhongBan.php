<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    use HasFactory;
    protected $table = 'phong_ban';
    protected $primaryKey = 'MaPB';
    protected $fillable = ['TenPB', 'DiaChi', 'NgayTL'];
}
