<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senbudkomen extends Model
{
    use HasFactory;
    protected $table="senbudkomen";
    protected $fillable = ['id', 'name', 'comment'];
}
