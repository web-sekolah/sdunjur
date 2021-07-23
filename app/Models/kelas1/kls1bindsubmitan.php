<?php

namespace App\Models\kelas1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls1bindsubmitan extends Model
{
    use HasFactory;
    protected $table="kls1bindsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas1\kls1bindsubmision.php', 'comment_id');
    }
   
}
