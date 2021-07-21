<?php

namespace App\Models\tanya5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indokomen extends Model
{
    use HasFactory;
    protected $table="indokomen5";
    protected $fillable = ['id', 'name', 'comment'];
}
