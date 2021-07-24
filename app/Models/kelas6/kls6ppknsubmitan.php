<?php

namespace App\Models\kelas6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls6ppknsubmitan extends Model
{
    use HasFactory;
    protected $table="kls6ppknsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas6\kls6ppknsubmision.php', 'comment_id');
    }
}
