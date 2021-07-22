<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamakomen extends Model
{
    use HasFactory;
    protected $table="agamakomen4";
    protected $fillable = ['id', 'name', 'comment'];
}
