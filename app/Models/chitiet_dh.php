<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chitiet_dh extends Model
{
    use HasFactory;
    protected $table = 'chitiet_dh';

    protected $primaryKey = 'id_dh';
   
    protected $fillable = ['ten_sp',
    'soluong'
    ];
    public $timestamp= false;
}
