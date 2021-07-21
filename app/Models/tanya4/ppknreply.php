<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknreply extends Model
{
    use HasFactory;
    protected $table="ppknreplies4";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya4\ppknkomen', 'comment_id');
    }
}
