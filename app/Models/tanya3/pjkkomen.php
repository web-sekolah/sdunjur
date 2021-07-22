<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjkkomen extends Model
{
    use HasFactory;
    protected $table="pjkkomen3";
    protected $fillable = ['id', 'name', 'comment'];
}
