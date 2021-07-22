<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indokomen extends Model
{
    use HasFactory;
    protected $table="indokomen2";
    protected $fillable = ['id', 'name', 'comment'];
}
