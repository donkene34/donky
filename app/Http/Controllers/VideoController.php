<?php

namespace App\Http\Controllers;

use App\like;
use App\video;
use App\dislike;
use App\commentaire;
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

    public function create()
    {
        return view('create');
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

        return redirect()->route('video.index');
    }

    public function show(Video $video, commentaire $commentaires)
    {
        $commentaires = commentaire::where('video_id',$video->id)->orderBy('id','desc')->get();

        return view('show',compact(['video','commentaires']));
    }

    public  function like(Request $request)
    {
        $idVideo = $request->input('videoId');

        $video = video::find($idVideo);

        if($video->liked())
        {
            $res = like::where([
                'user_id' => auth()->user()->id,
                'video_id' => $idVideo
            ])->delete();

            if($res)
            {
                return redirect()->route('video.show',['video' => $idVideo])->with('session','retiré des likes');
            }
        }
        else
        {
            $like = new like();

            $like->user_id = auth()->user()->id;
            $like->video_id =$idVideo;
            $like->save();

            return redirect()->route('video.show',['video' => $idVideo])->with('session','ajouté des likes');

        }
    }

    public function dislike(Request $request)
    {
        $idVideo = $request->input('videoId');

        $video = video::find($idVideo);

        if($video->disliked())
        {
            $res = dislike::where([
                'user_id' => auth()->user()->id,
                'video_id' => $idVideo
            ])->delete();

            if($res)
            {
                return redirect()->route('video.show',['video' => $idVideo])->with('session','retiré des dislikes');
            }
        }
        else
        {
            $dislike = new dislike();

            $dislike->user_id = auth()->user()->id;
            $dislike->video_id = $idVideo;
            $dislike->save();

            return redirect()->route('video.show',['video' => $idVideo])->with('session','ajouté aux dislikes');

        }
    }


}
