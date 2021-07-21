<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjkkomen extends Model
{
    use HasFactory;
    protected $table="pjkkomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
