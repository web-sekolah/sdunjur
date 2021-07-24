<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamakuismodel extends Model
{
    use HasFactory;
    protected $table = 'kls6kuisagama';

    protected $fillable = ['id','topik','waktumulai','link','tanggal','keterangan'];

    protected $primarykey = 'id';
}
