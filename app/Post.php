<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content'
    ];

    //post -> categories
    public function category() {
        return $this->belongsTo('App\Category');
    }

    //posts -> tags
    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
}
