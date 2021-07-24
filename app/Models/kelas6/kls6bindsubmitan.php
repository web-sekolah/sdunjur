<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls6bindsubmitan extends Model
{
    use HasFactory;
    protected $table="kls6bindsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas6\kls6bindsubmision.php', 'comment_id');
    }
   
}
