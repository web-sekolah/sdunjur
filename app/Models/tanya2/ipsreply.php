<?php

namespace App\Models\tanya2;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipsreply extends Model
{
    use HasFactory;
    protected $table="ipsreplies2";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya2\ipskomen', 'comment_id');
    }
}
