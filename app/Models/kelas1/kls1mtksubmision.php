<?php

namespace App\Models\kelas1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls1mtksubmision extends Model
{
    use HasFactory;
    protected $table = 'kls1mtksubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
}
