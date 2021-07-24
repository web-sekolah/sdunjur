<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sbdkuismodel extends Model
{
    use HasFactory;
    protected $table = 'kls3kuissbd';

    protected $fillable = ['id','topik','waktumulai','link','tanggal','keterangan'];

    protected $primarykey = 'id';
}
