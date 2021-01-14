<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function store()
    {
        request()->validate([
            'reponse' => ['required'],
        ]);

        $commentaireId = request()->input('idCommentaire');
        $idVideo = request()->input('idVideo');

        auth()->user()->reponse()->create([
            'reponse' => request('reponse'),
            'commentaire_id' => $commentaireId
        ]);

        return redirect()->route('video.show',['video' => $idVideo])->with('session','reponse ajouté');
    }
}
