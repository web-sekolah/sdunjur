<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indokomen extends Model
{
    use HasFactory;
    protected $table="indokomen6";
    protected $fillable = ['id', 'name', 'comment'];
}
