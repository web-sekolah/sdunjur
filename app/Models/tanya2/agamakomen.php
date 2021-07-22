<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamakomen extends Model
{
    use HasFactory;
    protected $table="agamakomen2";
    protected $fillable = ['id', 'name', 'comment'];
}
