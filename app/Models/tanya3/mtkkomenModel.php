<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkomenModel extends Model
{
    use HasFactory;
    protected $table="mtkkomen3";
    protected $fillable = ['id', 'name', 'comment'];
}
