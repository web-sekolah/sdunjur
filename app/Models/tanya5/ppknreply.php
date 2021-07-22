<?php

namespace App\Models\tanya5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppknreply extends Model
{
    use HasFactory;
    protected $table="ppknreplies5";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya5\ppknkomen', 'comment_id');
    }
}
