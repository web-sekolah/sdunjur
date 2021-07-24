<?php

namespace App\Models\kelas2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls2agamasubsmision extends Model
{
    use HasFactory;
    protected $table = 'kls2agamasubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
    
}
