<?php

namespace App\Models\tanya4;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipsreply extends Model
{
    use HasFactory;
    protected $table="ipsreplies4";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya4\ipskomen', 'comment_id');
    }
}
