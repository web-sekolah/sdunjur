<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipskomen extends Model
{
    use HasFactory;
    protected $table="ipskomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
