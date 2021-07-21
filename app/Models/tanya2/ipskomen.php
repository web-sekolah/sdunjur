<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipskomen extends Model
{
    use HasFactory;
    protected $table="ipskomen2";
    protected $fillable = ['id', 'name', 'comment'];
}
