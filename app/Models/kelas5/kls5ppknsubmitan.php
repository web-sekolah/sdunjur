<?php

namespace App\Models\kelas5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls5ppknsubmitan extends Model
{
    use HasFactory;
    protected $table="kls5ppknsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas1\kls1ppknsubmision.php', 'comment_id');
    }
}
