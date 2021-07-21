<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknreply extends Model
{
    use HasFactory;
    protected $table="ppknreplies6";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya6\ppknkomen', 'comment_id');
    }
}
