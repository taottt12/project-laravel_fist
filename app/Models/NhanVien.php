<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;
    protected $table = 'nhan_vien';
    protected $primaryKey = 'id';
    protected $fillable = ['TenNV', 'MaVT', 'MaPB', 'Luong', 'NgayVL'];
}
