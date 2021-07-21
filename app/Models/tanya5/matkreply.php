<?php

namespace App\Models\tanya5;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkreply extends Model
{
    use HasFactory;
    protected $table="mtkreplies5";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya5\mtkkomenModel', 'comment_id');
    }
    
}
