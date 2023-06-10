<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc_sp extends Model
{
    use HasFactory;
    protected $table = 'danhmuc_sp';

    protected $primaryKey = 'id_dm';
   
    protected $fillable = [
    'ten_dm'
    ];
    public $timestamp= false;
}
