<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknkomen extends Model
{
    use HasFactory;
    protected $table="ppknkomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
