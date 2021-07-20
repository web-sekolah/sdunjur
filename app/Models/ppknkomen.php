<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknkomen extends Model
{
    use HasFactory;
    protected $table="ppknkomen";
    protected $fillable = ['id', 'name', 'comment'];
}
