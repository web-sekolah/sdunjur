<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipakomen extends Model
{
    use HasFactory;
    protected $table="ipakomen4";
    protected $fillable = ['id', 'name', 'comment'];
}
