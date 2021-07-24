<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls6ipasubmitan extends Model
{
    use HasFactory;
    protected $table="kls6ipasubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas6\kls6ipasubmision.php', 'comment_id');
    }
  
}
