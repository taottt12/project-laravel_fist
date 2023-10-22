<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MucLuong extends Model
{
    use HasFactory;
    protected $table = 'muc_luong';
    protected $primaryKey = 'MaML';
    protected $fillable = ['Mucthap', 'Muccao'];
}
