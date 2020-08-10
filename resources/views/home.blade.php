@extends('layouts.app')

@section('content')

{{-- affichage des videos --}}
<div class="container-fluid">
    <h4 class="m-4">Recommandations</h4>
    <div class="row">
        @foreach ($videos as $video)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 video">
            <a href="{{ route('video.show', ['video' => $video->id]) }}">
                <video  src="{{ asset( 'storage/'.$video->video) }}"></video>
            </a>
            <div class="ptitre d-flex  align-items-center">
                <div class="photo d-flex justify-content-center align-items-center mb-5">A</div>
                <div>
                    <div class="titre-video mx-3  font-weight-bold">{{ $video->titre }}</div>
                    <div class="pseudo mx-3">{{ $video->user->pseudo }}</div>
                    <div class="container d-flex ">
                        <div class="nombre-vues">0</div>
                        <div class="temps mx-3">{{ Carbon\Carbon::parse($video->created_at)->diffForHumans() }}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
