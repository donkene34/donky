@extends('layouts.app')

@section('content')
@if (session()->has('session'))
    <section class="alert-primary">
        {{ session()->get('session') }}
    </section>
@endif
<section>
    <div class="video-show">
        <video src="{{ asset('storage/'.$video->video) }}" controls></video>
        <div class="titre-video-show">{{ $video->titre }}</div>
        <div class="d-flex my-2 justify-content-between w-100">
            <p>10000 vues.{{ $video->created_at }}</p>
            <div class="d-flex w-50 justify-content-between align-items-center">
                <p class="d-flex">
                    {{-- formulaire like --}}
                    <form action="{{ route('video.like') }}" id="form-like" class="d-flex" method="post">
                        @csrf
                        <input type="hidden" id="video-id" name="videoId" value="{{ $video->id }}">
                        <button type="submit" class="btn-like" value=""><i class="fas fa-thumbs-up text-secondary"></i><span class="ml-2 text-secondary" id="count">{{ $video->like->count() }}</span></button>
                    </form>


                    {{-- formulaire dislike --}}
                    <form action="{{ route('video.dislike') }}" id="form-dislike" class="d-flex" method="post">
                        @csrf
                        <input type="hidden" name="" value="{{ $video->id }}">
                        <input type="hidden" id="video-id" name="videoId" value="{{ $video->id }}">
                        <button type="submit" class="btn-like" value=""><i class="fas fa-thumbs-down text-secondary"></i><span class="ml-2 text-secondary" id="count">{{ $video->dislike->count() }}</span></button>
                    </form>
                </p>
                <p>
                    <form action="" method="post"></form>
                    @csrf
                    <i class="fas fa-share text-secondary">
                        <input type="submit" value="PARTAGER">
                    </i>
                </p>
                <p>
                    <form action="" method="post"></form>
                    @csrf
                    <i class="fas fa-share text-secondary">
                        <input type="submit" value="ENREGISTRER">
                    </i>
                </p>
                <p><i class="fas fa-ellipsis-h"></i></p>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between">
            <div class="d-flex">
                <div class="photo d-flex justify-content-center align-items-center ">{{ strtoupper(substr($video->user->pseudo,0,1)) }}</div>
                <div class="ml-3">
                    <div class="font-weight-bolder">{{ $video->user->pseudo }}</div>
                    <div class="text-secondary">15 abonnés</div>
                </div>
            </div>
            <div><button class="btn btn-primary text-uppercase text-white">s'abonner</button></div>
        </div>
        <hr>
        <div>
            {{ $video->description }}
        </div>
        <div>
            <form action="{{route('commentaire.store')}}" method="post">
                @csrf
                @method('POST')
                <input type="text" name="commentaire" id="" placeholder="Ajouter Un Commentaire Public">
                <input type="hidden" name="idVideo" value="{{$video->id}}">
                <input type="reset" value="ANNULER">
                <input type="submit" value="AJOUTER UN COMMENTAIRE ">
            </form>
        </div>
        <div class="ml-2">
            <div>photo</div>
            <p>commentaires</p>
            @foreach ($commentaires as $commentaire)
                <div class="d-flex">
                    <div class="photo d-flex justify-content-center align-items-center"> {{ substr($commentaire->user->pseudo,0,1) }} </div>
                    <div class="ml-5">
                        <div class="font-weight-bold"> {{ $commentaire->user->pseudo }} <span class="ml-2 text-secondary font-weight-normal">{{ Carbon\carbon::parse($commentaire->created_at)->diffForHumans() }}</span> </div>
                        <p class="text-primary">{{$commentaire->commentaire}}</p>
                    </div>
                </div>
                <p class="w-25  d-flex align-items-center justify-content-between">
                    <i class="fas fa-thumbs-up text-secondary">
                    </i><i class="fas fa-thumbs-down text-secondary"></i>
                    <button class="btn text-secondary font-weight->bolder">REPONDRE</button>
                </p>

                <form action="{{route('reponse.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <input type="text" name="reponse" id="">
                    <input type="hidden" name="idVideo" value="{{$video->id}}">
                    <input type="hidden" name="idCommentaire" value="{{$commentaire->id}}">
                    <input type="submit" value="envoyer votre reponse">
                </form>
                <div class="reponses ml-5">
                    @foreach ($commentaire->reponses as $reponse)
                        <div class="photo d-flex justify-content-center align-items-center"> {{ strtoupper(substr($reponse->user->pseudo,0,1)) }} </div>
                        <div class="font-weight-bolder"> {{ $reponse->user->pseudo }} </div>
                        <p class="text-danger">{{$reponse->reponse}}</p>
                    @endforeach
                </div>

            @endforeach
        </div>
    </div>
</section>
@endsection
