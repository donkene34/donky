<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{

    protected $fillable = [
        'titre','description','miniature','video'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function like()
    {
        return $this->hasMany('App\like');
    }

    public function liked()
    {
        return $this->like->where('user_id',auth()->user()->id)->isEmpty() ? false : true;
    }

    public function dislike()
    {
        return $this->hasMany('App\dislike');
    }

    public function disliked()
    {
        return $this->dislike->where('user_id',auth()->user()->id)->isEmpty() ? false : true;
    }

    public function commentaire()
    {
        return $this->hasMany('App\commentaire');
    }
}
