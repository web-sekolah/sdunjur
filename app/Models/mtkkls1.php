<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtkkls1 extends Model
{
    use HasFactory;
    protected $table = 'kelas1mtk';

    protected $fillable = ['id','tanggal','hari','topik','judul','waktumulai','waktuselesai','vidio','file','deskripsi'];

    protected $primarykey = 'id';
}
