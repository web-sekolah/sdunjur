<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknkomen extends Model
{
    use HasFactory;
    protected $table="ppknkomen3";
    protected $fillable = ['id', 'name', 'comment'];
}
