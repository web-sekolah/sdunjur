<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamakomen extends Model
{
    use HasFactory;
    protected $table="agamakomen";
    protected $fillable = ['id', 'name', 'comment'];
}
