<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mulokkomen extends Model
{
    use HasFactory;
    protected $table="mulokkomen2";
    protected $fillable = ['id', 'name', 'comment'];
}
