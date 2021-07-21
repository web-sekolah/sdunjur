<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknreply extends Model
{
    use HasFactory;
    protected $table="ppknreplies3";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya3\ppknkomen', 'comment_id');
    }
}
