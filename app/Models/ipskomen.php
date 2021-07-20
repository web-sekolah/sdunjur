<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipskomen extends Model
{
    use HasFactory;
    protected $table="ipskomen";
    protected $fillable = ['id', 'name', 'comment'];
}
