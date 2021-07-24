<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls6ipssubmision extends Model
{
    use HasFactory;
    protected $table = 'kls6ipssubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
}
