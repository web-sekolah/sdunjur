<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipakomen extends Model
{
    use HasFactory;
    protected $table="ipakomen3";
    protected $fillable = ['id', 'name', 'comment'];
}
