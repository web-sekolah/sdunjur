<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipskomen extends Model
{
    use HasFactory;
    protected $table="ipskomen3";
    protected $fillable = ['id', 'name', 'comment'];
}
