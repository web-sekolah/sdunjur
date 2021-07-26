<?php

namespace App\Models\kelas5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls5bindsubmision extends Model
{
    use HasFactory;
    protected $table = 'kls5bindsubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
}
