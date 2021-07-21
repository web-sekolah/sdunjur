<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipakomen extends Model
{
    use HasFactory;
    protected $table="ipakomen2";
    protected $fillable = ['id', 'name', 'comment'];
}
