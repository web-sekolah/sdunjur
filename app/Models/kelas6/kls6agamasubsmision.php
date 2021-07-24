<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls6agamasubsmision extends Model
{
    use HasFactory;
    protected $table = 'kls6agamasubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';
    
}
