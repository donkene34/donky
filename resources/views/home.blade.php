@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="col-md-12">AJouter une video</h1><br>
            <div class="card-body">
            <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="text" name="titre" id="titre" placeholder="titre">
                    @error('titre')
                        {{ $message }}
                    @enderror<br><br>

                    <textarea name="description" id="description" cols="30" rows="10">description</textarea>
                    @error('description')
                        {{ $message }}
                    @enderror<br><br>

                    <input type="file" name="miniature" id="mignature">
                    @error('miniature')
                        {{ $message }}
                    @enderror<br><br>
                    <br><br>
                    <input type="file" name="video" id="video">
                    @error('video')
                        {{ $message }}
                    @enderror<br><br>
                    <input type="submit" value="mettre la video en ligne"><br><br>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- affichage des videos --}}
<div class="container-fluid">
    <div class="row">
        @foreach ($videos as $video)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 video">
            <video width="370" height="380" src="{{ asset( 'storage/'.$video->video) }}">uyuyuyyuy</video>
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
