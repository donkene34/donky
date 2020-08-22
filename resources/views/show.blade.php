@extends('layouts.app')

@section('content')
@if (session()->has('session'))
    <section class="alert-primary">
        {{ session()->get('session') }}
    </section>
@endif
<section>
    <div class="w-50">
        <video src="{{ asset('storage/'.$video->video) }}" controls></video>
        <div>{{ $video->titre }}</div>
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
                    <form action="" class="d-flex" method="post">
                        @csrf
                        <input type="hidden" name="" value="{{ $video->id }}">
                        <input type="hidden" id="video-id" name="videoId" value="{{ $video->id }}">
                        <button type="submit" class="btn-like" value=""><i class="fas fa-thumbs-down text-secondary"></i><span class="ml-2 text-secondary" id="count">{{ $video->like->count() }}</span></button>
                    </form>
                </p>
                <p><i class="fas fa-share text-secondary">PARTAGER</i></p>
                <p><i class="fas fa-stream">ENREGISTRER</i></p>
                <p><i class="fas fa-ellipsis-h"></i></p>
            </div>
        </div>
        <hr>
        <div>
            {{ $video->description }}
        </div>
        <div>
            <form action="" method="post">
                <input type="text" name="" id="" placeholder="Ajouter Un Commentaire Public">
                <input type="reset" value="ANNULER">
                <input type="submit" value="AJOUTER UN COMMENTAIRE ">
            </form>
        </div>
        <div>
            <div>photo</div>
            <p>commentaire</p>
            <p>
                <i class="fas fa-thumbs-up text-secondary">
                </i><i class="fas fa-thumbs-down text-secondary"></i>
            </p>
            <button>REPONDRE</button>
        </div>
    </div>
</section>
@endsection
