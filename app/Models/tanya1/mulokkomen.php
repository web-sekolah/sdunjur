<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mulokkomen extends Model
{
    use HasFactory;
    protected $table="mulokkomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
