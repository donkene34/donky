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
}
