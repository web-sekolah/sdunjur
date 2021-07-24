<?php

namespace App\Models\kelas2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls2ipasubmision extends Model
{
    use HasFactory;
    protected $table = 'kls2ipasubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
}
