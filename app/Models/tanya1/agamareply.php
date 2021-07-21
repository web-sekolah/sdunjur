<?php

namespace App\Models\tanya1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agamareply extends Model
{
    use HasFactory;
    protected $table="agamareplies1";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya1\agamakomen', 'comment_id');
    }
    
}
