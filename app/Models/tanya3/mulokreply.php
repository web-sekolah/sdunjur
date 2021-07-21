<?php

namespace App\Models\tanya3;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class mulokreply extends Model
{
    use HasFactory;
    protected $table="mulokreplies3";
    protected $fillable = ['id', 'name', 'comment', 'comment_id'];

    public function Comment() 
    {
        return $this->belongsTo('App\Models\tanya3\mulokkomen', 'comment_id');
    }
}
