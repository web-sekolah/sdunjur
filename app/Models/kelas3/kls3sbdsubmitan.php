<?php

namespace App\Models\kelas3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls3sbdsubmitan extends Model
{
    use HasFactory;
    protected $table="kls3sbdsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas1\kls1sbdsubmision.php', 'comment_id');
    }
}
