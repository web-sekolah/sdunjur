<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipakls3 extends Model
{
    use HasFactory;
    protected $table = 'kelas3ipa';
    protected $fillable = ['id','tanggal','hari','Topik','Judul','waktumulai','waktuselesai','vidio','file','deskripsi'];
    protected $primarykey = 'id';
}
