@extends('layouts.main')
<link rel="stylesheet" href="/style/vente.css">
@section('contenu')

<div class=" content">
        <div class="container ">
                <div class="row ">
                    <div class="col-md-4 mt-5">
                        <h1 class="text-white font-weight-bold">Passez votre annonce de vente sur MYHOME.com</h1>
                            <h1 class="tireet"></h1>
                            <p class="text-white mt-4 font-weight-bold increase">Moukarrimatou a vendu à la <span class="bg-warning">1ère visite</span>  et a
                                    économisé <span class="bg-warning">2.000.000 FCFA</span>de frais d'agence.</p>
                    </div>
                    <div class="col-md-4 offset-md-4 ">
                        <img src="images/ama.png" alt="homme " width="100%" height="400px">
                    </div>
                </div>
        </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>De quoi avez-vous besoin ?</h2>
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
                    <p class="font-weight-normal mt-3"><i class="fas fa-check text-primary"> </i>&nbsp;Vous estimez votre prix de vente</p>
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
                <span class="font-weight-normal "><i class="fas fa-check  textes"> </i>&nbsp;Vous bénéficiez d'un coaching immobilier</span><br>
                <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Nous réalisons des photos HD et une visite virtuelle</p>
                <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Nous téléchargeons une vidéo de qualité du bien</p>
                <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Nous la diffusons et nous filtrons les acheteurs</p>
                <p class="font-weight-normal mt-3"><i class="fas fa-check  textes"> </i>&nbsp;Nos experts réalisent une estimation du prix de vente</p>
                <div class="container textess mt-5">
                    <a href="/premium"><h4 class="text-center text-white">A partir de 6000  FCFA</h4></a>
                </div>
            </div>
        </div>
    </div>



@endsection