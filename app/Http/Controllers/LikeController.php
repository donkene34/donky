<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\like;

use App\video;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function store(video $video)
    // {
    //     // auth()->user()->like()->create
    // }
}
