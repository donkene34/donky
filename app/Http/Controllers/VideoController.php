<?php

namespace App\Http\Controllers;

use App\video;
use App\Rules\VideoRule;
use Illuminate\Http\Request;


class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $videos = video::all();

        return view('home',compact('videos'));
    }

    public function store()
    {
        $data = request()->validate([
            'titre' => ['required','string'],
            'description' => ['string'],
            'mignature' => ['require,image'],
            'video' => ['required',new VideoRule]
        ]);

        $imagePathMiniature = request('miniature')->store('uploads','public');
        $imagePathVideo = request('video')->store('uploads','public');

        auth()->user()->video()->create([
            'titre' => $data['titre'],
            'description' => $data['description'],
            'miniature' => $imagePathMiniature,
            'video' => $imagePathVideo
        ]);

        return redirect()->route('home');
    }


}
