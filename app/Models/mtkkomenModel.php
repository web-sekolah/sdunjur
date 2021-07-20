<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkomenModel extends Model
{
    use HasFactory;
    protected $table="mtkkomen";
    protected $fillable = ['id', 'name', 'comment'];
}
