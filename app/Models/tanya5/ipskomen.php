<?php

namespace App\Models\tanya5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipskomen extends Model
{
    use HasFactory;
    protected $table="ipskomen5";
    protected $fillable = ['id', 'name', 'comment'];
}
