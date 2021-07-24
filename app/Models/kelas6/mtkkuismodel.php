<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkuismodel extends Model
{
    use HasFactory;
    protected $table = 'kls6kuismatka';

    protected $fillable = ['id','topik','waktumulai','link','tanggal','keterangan'];

    protected $primarykey = 'id';
}
