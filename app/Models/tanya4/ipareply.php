<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipareply extends Model
{
    use HasFactory;
    protected $table="ipareplies4";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya4\ipakomen', 'comment_id');
    }
}
