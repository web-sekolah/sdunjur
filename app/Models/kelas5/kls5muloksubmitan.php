<?php

namespace App\Models\kelas5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls5muloksubmitan extends Model
{
    use HasFactory;
    protected $table="kls5muloksubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas1\kls1muloksubmision.php', 'comment_id');
    }
}
