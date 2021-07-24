<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bindkuismodel extends Model
{
    use HasFactory;
    protected $table = 'kls3kuisbind';

    protected $fillable = ['id','topik','waktumulai','link','tanggal','keterangan'];

    protected $primarykey = 'id';
}
