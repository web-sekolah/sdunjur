<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjkkomen extends Model
{
    use HasFactory;
    protected $table="pjkkomen2";
    protected $fillable = ['id', 'name', 'comment'];
}
