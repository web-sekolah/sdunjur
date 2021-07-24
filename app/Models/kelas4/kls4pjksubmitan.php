<?php

namespace App\Models\kelas4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls4pjksubmitan extends Model
{
    use HasFactory;
    protected $table="kls4pjksubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas4\kls4pjksubmision.php', 'comment_id');
    }
}
