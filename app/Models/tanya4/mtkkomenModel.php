<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkomenModel extends Model
{
    use HasFactory;
    protected $table="mtkkomen4";
    protected $fillable = ['id', 'name', 'comment'];
}
