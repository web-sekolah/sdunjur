<?php

namespace App\Models\kelas2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls2ppknsubmitan extends Model
{
    use HasFactory;
    protected $table="kls2ppknsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas2\kls2ppknsubmision.php', 'comment_id');
    }
}
