<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkomenModel extends Model
{
    use HasFactory;
    protected $table="mtkkomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
