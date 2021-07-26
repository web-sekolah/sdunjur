<?php

namespace App\Models\kelas5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls5ipasubmitan extends Model
{
    use HasFactory;
    protected $table="kls5ipasubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas1\kls1ipasubmision.php', 'comment_id');
    }
}
