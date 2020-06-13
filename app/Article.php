<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    // protected $fillable = ['title', 'excerpt', 'body']; // allow entries in db

    /* autofetch column name */
    /* public function getRouteKeyName()
    {
        return 'title';
    } */

    public function getPath()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
