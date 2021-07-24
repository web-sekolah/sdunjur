<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls3muloksubsmision extends Model
{
    use HasFactory;
    protected $table = 'kls3muloksubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';

}
