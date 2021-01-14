<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reponse extends Model
{
    protected $guarded = [];

    public function commenteur()
    {
        return $this->belongsTo('App\commentaire');
    }
    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
