<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class senbudkomen extends Model
{
    use HasFactory;
    protected $table="senbudkomen4";
    protected $fillable = ['id', 'name', 'comment'];
}
