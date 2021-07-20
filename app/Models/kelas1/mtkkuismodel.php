<?php

namespace App\Models\kelas1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkuismodel extends Model
{
    use HasFactory;
    protected $table = 'kuismatka';

    protected $fillable = ['id','topik','waktumulai','link','tanggal','keterangan'];

    protected $primarykey = 'id';
}
