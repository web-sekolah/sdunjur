<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mulokkomen extends Model
{
    use HasFactory;
    protected $table="mulokkomen4";
    protected $fillable = ['id', 'name', 'comment'];
}
