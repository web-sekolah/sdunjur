<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls3pjksubsmision extends Model
{
    use HasFactory;
    protected $table = 'kls3pjksubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
}
