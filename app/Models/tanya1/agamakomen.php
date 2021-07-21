<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamakomen extends Model
{
    use HasFactory;
    protected $table="agamakomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
