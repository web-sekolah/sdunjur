<?php

namespace App\Models\kelas2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kls2sbdsubmitan extends Model
{
    use HasFactory;
    protected $table="kls2sbdsubmitan";
    protected $fillable = ['id', 'nama', 'file', 'submit_id'];

    public function Submit() 
    {
        return $this->belongsTo('App\Models\kelas2\kls2sbdsubmision.php', 'comment_id');
    }
}
