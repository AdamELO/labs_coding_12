<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
