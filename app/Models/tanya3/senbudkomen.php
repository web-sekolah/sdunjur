<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senbudkomen extends Model
{
    use HasFactory;
    protected $table="senbudkomen3";
    protected $fillable = ['id', 'name', 'comment'];
}
