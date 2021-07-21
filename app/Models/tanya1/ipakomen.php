<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipakomen extends Model
{
    use HasFactory;
    protected $table="ipakomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
