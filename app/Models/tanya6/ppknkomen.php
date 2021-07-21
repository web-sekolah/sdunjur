<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknkomen extends Model
{
    use HasFactory;
    protected $table="ppknkomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
