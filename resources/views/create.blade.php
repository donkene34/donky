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

@endsection
