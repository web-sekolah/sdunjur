<?php

namespace App\Models\kelas4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls4agamasubsmision extends Model
{
    use HasFactory;
    protected $table = 'kls4agamasubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
    
}
