<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indokomen extends Model
{
    use HasFactory;
    protected $table="indokomen";
    protected $fillable = ['id', 'name', 'comment'];
}
