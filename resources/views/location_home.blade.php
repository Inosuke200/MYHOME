@extends('layouts.main')
<link rel="stylesheet" href="/style/location.css">

@section('contenu')

<div class=" content">
    <div class="container ">
            <div class="row ">
                <div class="col-md-4 mt-5">
                    <h1 class="text-white font-weight-bold">C'est tellement simple
                        de louer avec MY HOME !</h1>
                        <h1 class="tireet"></h1>

                        <p class="text-white mt-4 font-weight-normal ">MY HOME est connu, fiable, pro et sans
                                 complexité pour trouver un bien. Et en plus, tout se passe
                                avec beaucoup de simplicité et de rapidité. »
                                Razack - Propriétaire sur MY HOME</p>
                </div>
                <div class="col-md-4 offset-md-4 ">
                    <img src="images/location.png" alt="homme " width="100%" height="400px">
                </div>
            </div>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>Choisissez votre formule</h2>
                <h1 class="tirett"></h1>
            </div>
        </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 care mt-5">
                <a href="#"><h3 class="text-primary font-weight-bold mt-4 ml-3">Annonce classique</h3></a>
                <p class="mt-5 ml-3 font-weight-bold">Vous publiez votre annonce sur MYHOME.com :</p>
                <span class="font-weight-normal "><i class="fas fa-check text-primary"> </i>&nbsp; Vous créez votre annonce en quelques minutes</span> <br>
                <p class="font-weight-normal mt-3"><i class="fas fa-check text-primary"> </i>&nbsp;Nous diffusons votre offre à des locataires qualifiés</p>
                <p class="font-weight-normal mt-3"><i class="fas fa-check text-primary"> </i>&nbsp;Notre service client vérifie et optimise votre annonce</p>
                <p class="font-weight-normal mt-3"><i class="fas fa-check text-primary"> </i>&nbsp;Vous téléchargez jusqu'à 12 photos du bien</p>
                <p class="font-weight-normal mt-3"><i class="fas fa-check text-primary"> </i>&nbsp;Vous recevez une notification pour les locataires intéréssés</p>
                <div class="container bg-primary mt-5">
                    <a href="/space"><h4 class="text-center text-white">A partir de 0 FCFA</h4></a>
                </div>
        </div>
        <div class="col-md-5 care mt-5 offset-md-2 ">
            <div class="contenir d-flex">
                <div class=" mt-4 ml-4">
                        <a href="#"><i class="fas fa-star star"></i></a>
                </div>
                <div>
                        <a href="#"><h3 class="star font-weight-bold mt-4 ml-3">Pack premium</h3></a>   
                </div>
            </div>
            <p class="mt-5 ml-3 font-weight-bold">Des services premium pour louer sereinement !</p>
            <span class="font-weight-normal "><i class="fas fa-check  textes"> </i>&nbsp; Publiez votre annonce pour une durée illimitée</span> <br>
            <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Nous prenons des photos 3D du bien</p>
            <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Nous téléchargeons une vidéo de qualité du bien</p>
            <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Vous bénéficiez d'un suivi avant la mise en location</p>
            <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Notre service client optimise au maximum vos annonces</p>
            <div class="container textess mt-5">
                <a href="/premium"><h4 class="text-center text-white">A partir de 5000  FCFA</h4></a>
            </div>
        </div>
    </div>
</div>

@endsection