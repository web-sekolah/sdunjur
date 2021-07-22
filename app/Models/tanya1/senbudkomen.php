<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senbudkomen extends Model
{
    use HasFactory;
    protected $table="senbudkomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
