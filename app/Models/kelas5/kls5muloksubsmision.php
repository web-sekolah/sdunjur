<?php

namespace App\Models\kelas5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls5muloksubsmision extends Model
{
    use HasFactory;
    protected $table = 'kls5muloksubmision';

    protected $fillable = ['id','judul','bataswaktu'];

    protected $primarykey = 'id';

}
