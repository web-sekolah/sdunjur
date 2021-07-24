<?php

namespace App\Models\kelas4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls4ipssubmision extends Model
{
    use HasFactory;
    protected $table = 'kls4ipssubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
}
