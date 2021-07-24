<?php

namespace App\Models\kelas2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls2ipasubmitan extends Model
{
    use HasFactory;
    protected $table="kls2ipasubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas2\kls2ipasubmision.php', 'comment_id');
    }
  
}
