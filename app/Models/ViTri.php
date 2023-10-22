<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViTri extends Model
{
    use HasFactory;
    protected $table = 'vi_tri';
    protected $primaryKey = 'MaVT';
    protected $fillable = ['mota'];
}
