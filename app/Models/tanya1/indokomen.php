<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indokomen extends Model
{
    use HasFactory;
    protected $table="indokomen1";
    protected $fillable = ['id', 'name', 'comment'];
}
