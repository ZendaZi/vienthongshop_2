<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    use HasFactory;
    protected $table = 'sanpham';

    protected $primaryKey = 'id_sp';
   
    protected $fillable = [
    'id_danhmuc',
    'ten_sp',
    'link_imgsp',
    'gia_sp',
    'kho'
    ];
    public $timestamp= false;
}
