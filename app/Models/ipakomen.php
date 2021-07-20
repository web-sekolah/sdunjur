<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipakomen extends Model
{
    use HasFactory;
    protected $table="ipakomen";
    protected $fillable = ['id', 'name', 'comment'];
}
