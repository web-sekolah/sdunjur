<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkls3 extends Model
{
    use HasFactory;
    protected $table = 'kelas3mtk';
    protected $fillable = ['id','tanggal','hari','Topik','Judul','waktumulai','waktuselesai','vidio','file','deskripsi'];
    protected $primarykey = 'id';
}
