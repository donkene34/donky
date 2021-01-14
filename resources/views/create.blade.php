@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="noir bg-dark position-absolute"></div>
    <div id="div-modal" class="w-75 rounded h-75 bg-white div-modal position-absolute d-flex flex-column justify-content-center align-items-center">
        <div class="select-video rounded-circle d-flex justify-content-center align-items-center">
            <img src="{{ asset('storage/image/selectvideo.png') }}" alt="">
        </div>
        <div class="font-weight-bold mt-4">
            Glissez-déposez les fichiers vidéo que vous souhaitez mettre en ligne <br>
            <span class="font-weight-normal">Vos vidéos resteront privées jusqu'à leur publication.</span>
        </div>
        <div class="mt-4 input-file">
            <input  type="file" name="" id="file-input">
            <button class="btn-selection">SELECTIONNER DES ICHIERS</button>
        </div>
    </div>

    <div id="infos-video" class="w-75 rounded h-75 bg-white div-modal position-absolute d-flex flex-column align-items-center overflow-auto">
        <div class="d-flex justify-content-between w-100">
            <div class="titre-video-upload font-weight-bold text-center ml-5 mt-3">titre de la video</div>
            <div class="d-flex  d-flex justify-content-around align-items-center">
                <div class="enregistrer-brouillon ml-1 text-secondary">enregistrer en tant que brouillon</div>
                <div class="img ml-5"> <img src="{{ asset('storage/image/message.png') }}" alt=""></div>
                <button class="croix ml-4 mr-4">&times;</button>
            </div>
        </div>
        <div class="hr"></div>
        <div class="d-flex justify-content-around align-items-center sous-titres mt-3">
            <div class="trait-noir"></div>
            <div class="sous-titre">
                <p>détails</p>
                <div class="cercle"></div>
            </div>
            <div class="sous-titre">
                <p>élements video</p>
                <div class="cercle"></div>
            </div>
            <div class="sous-titre">
                <p>visibilité</p>
                <div class="cercle"></div>
            </div>
        </div>
        <div class="container d-flex">
            <div class="w-75">
                <h1>Details</h1>
                <form action="" method="post" class="ajout-video-form">
                    <div class="content-textarea m-5">
                        <div for="">Titre(obligatoire)</div>
                        <textarea class="focus " name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="content-textarea m-5">
                        <div for="">Description</div>
                        <textarea class="focus focus2" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </form>
                <div class="miniature w-100">
                    <h4>miniature</h4>
                    <p>Sélectionnez ou importez une image qui donne un aperçu du contenu de votre vidéo. Une miniature efficace se remarque et attire l'attention des spectateurs. En savoir plus</p>
                    <div class="img-miniature">
                        <form action="" method="post" class="ajout-miniature">
                            <div class="text-align-center">
                                <img class="ml-5" src="{{ asset('storage/image/ajoutImage.png') }}" alt="">
                                <p>importer une miniature</p>
                            </div>
                            <input type="file" name="" id="">
                        </form>
                        <div class="mini-miniature"></div>
                        <div class="mini-miniature"></div>
                        <div class="mini-miniature"></div>
                    </div>
                </div>
                <div class="miniature w-100 mt-5">
                    <div class="">
                        <h4>Playlists</h4>
                        <p>Ajoutez votre vidéo à une ou plusieurs playlists. Les playlists peuvent aider les spectateurs à trouver vos contenus plus rapidement. En savoir plus</p>
                        <select name="" id="">
                            <optgroup label="playlist">
                                <option value="1">1</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="miniature w-100 mt-5">
                    <div class="">
                        <h4>Audience</h4>
                        <p>Cette vidéo est désignée comme étant conçue pour les enfants    Défini par vous</p>
                        <p>Quel que soit votre pays de résidence, vous êtes légalement tenu de respecter la loi COPPA (Children's Online Privacy Protection Act) et/ou d'autres lois. Vous devez également nous indiquer si vos vidéos sont conçues pour les enfants. En quoi consistent les contenus conçus pour les enfants ?</p>
                        <div class="resume d-flex align-items-center">
                            <img class="i m-2" src="{{ asset('storage/image/i.png') }}" alt="">
                            <p>
                                Certaines fonctionnalités, comme les annonces personnalisées et les notifications, ne seront pas disponibles sur les vidéos conçues pour les enfants. Les vidéos classées comme conçues pour les enfants sont plus susceptibles d'être recommandées lorsque les spectateurs regardent d'autres contenus destinés aux enfants. En savoir plus
                            </p>
                        </div>
                        <div>
                            <input type="radio" class="mr-3" name="choix" id="">oui elle est concu pour les enfants
                        </div>
                        <div>
                            <input type="radio" class="mr-3" name="choix" id="">non elle n'est pas concu pour les enfants
                        </div>
                    </div>
                </div>
                <div class="miniature w-100 mt-5 text-uppercase text-primary font-weight-bold">autres options</div>
            </div>
            <div class="link-video w-25">
                <div class="image-link-video"></div>
                <div class="lien-link-video">
                    <h6>Lien vidéo</h6>
                    <p class="mb-5">https://youtu.be/lk4Jed73o3k</p>
                    <h6>Nom du fichier</h6>
                    <p class="mb-5">Top 10 Bad Boys In Football 2020.mp4</p>
                </div>
            </div>
        </div>
    </div>

</div>
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
