<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function path(){
        return route('articles.show', $this);
    }

    public function user(){
        return $this->belongsTo(User::class); // select * from user where article_id = 1
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
