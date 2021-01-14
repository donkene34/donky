<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaire extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function video()
    {
        return $this->belongsTo('App\video');
    }

    public function reponses()
    {
        return $this->hasMany('App\reponse');
    }
}
