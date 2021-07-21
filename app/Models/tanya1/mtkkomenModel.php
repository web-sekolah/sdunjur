<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkomenModel extends Model
{
    use HasFactory;
    protected $table="mtkkomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
