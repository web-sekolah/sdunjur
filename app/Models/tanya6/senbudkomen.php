<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senbudkomen extends Model
{
    use HasFactory;
    protected $table="senbudkomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
