<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamakomen extends Model
{
    use HasFactory;
    protected $table="agamakomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
