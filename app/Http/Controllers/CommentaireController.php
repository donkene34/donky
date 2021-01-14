<?php

namespace App\Http\Controllers;

use auth;
use App\video;
use App\commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'commentaire' => ['required','min:5']
        ]);

        $idVideo = $request->input('idVideo');

        auth()->user()->commentaire()->create([
            'commentaire' => request('commentaire'),
            'video_id' => $idVideo
        ]);

        // $commentaire = new commentaire();

        // $commentaire->commentaire = request('commentaire');
        // $commentaire->user_id = auth()->user()->id;
        // $commentaire->video_id = $idVideo;
        // $commentaire->save();

        return redirect()->route('video.show',['video' => $idVideo])->with('session','commentaire ajouté');
    }


}
