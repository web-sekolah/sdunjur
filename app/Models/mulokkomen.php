<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mulokkomen extends Model
{
    use HasFactory;
    protected $table="mulokkomen";
    protected $fillable = ['id', 'name', 'comment'];
}
