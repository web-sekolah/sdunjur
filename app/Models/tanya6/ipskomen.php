<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipskomen extends Model
{
    use HasFactory;
    protected $table="ipskomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
