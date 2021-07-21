<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mulokkomen extends Model
{
    use HasFactory;
    protected $table="mulokkomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
