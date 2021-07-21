<?php

namespace App\Models\tanya6;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkreply extends Model
{
    use HasFactory;
    protected $table="mtkreplies6";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya6\mtkkomenModel', 'comment_id');
    }
    
}
