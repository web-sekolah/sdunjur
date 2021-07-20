<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pjkkomen extends Model
{
    use HasFactory;
    protected $table="pjkkomen";
    protected $fillable = ['id', 'name', 'comment'];
}
