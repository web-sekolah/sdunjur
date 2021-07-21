<?php

namespace App\Models\tanya5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknkomen extends Model
{
    use HasFactory;
    protected $table="ppknkomen5";
    protected $fillable = ['id', 'name', 'comment'];
}
