<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjkkomen extends Model
{
    use HasFactory;
    protected $table="pjkkomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
