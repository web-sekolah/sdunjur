<?php

namespace App\Models\kelas4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bindkuismodel extends Model
{
    use HasFactory;
    protected $table = 'kls4kuisbind';

    protected $fillable = ['id','topik','waktumulai','link','tanggal','keterangan'];

    protected $primarykey = 'id';
}
