@extends('layouts.main')
<link rel="stylesheet" href="/style/piliers.css">

@section('contenu')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              <p class="font-weight-bold text-white mt-4 titre">Je suis un vendeur<br><b class="text-white font-weight-normal title">
                  <span class="nav-item itm  dropdown">
                        <a href="#"class=" text-white nav-link helpers font-weight-normal" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="accordion">Changer de profil</a></b></p>
                        <ul class="dropdown-menu helpers-dropdown contoure" aria-labelledby="navbarDropdownMenuLink">
                                <li class="border-bottom"><a class="dropdown-item " href="#1">Je suis acheteur</a></li>
                                <li class="border-bottom"><a class="dropdown-item " href="#2">Je suis vendeur</a></li>
                                <li class="border-bottom"><a class="dropdown-item " href="#3">Je suis bailleur</a></li>
                                <li ><a class="dropdown-item " href="#4">Je suis locataire</a></li>

                        </ul>
                  </span>
        
            </div>
            <div class="col-md-8 mt-4">
                    <form class=" marged d-flex  ">
                            <input class="form-control inputed " type="search" placeholder="Rechercher" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>
            </div>
        </div>
    </div>
</div>

<div class="tout d-flex">
    <div class="lateral">

    </div>
    <div class="contain  ">

            <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                      
                      <li class="breadcrumb-item active" aria-current="page">Mon espace</li>
                    </ol>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ml-2 mt-4">
                            <img src="/images/acheteurs.png" width="190" alt="">
                    </div>
                    <div class="col-md-6 mt-4">
                        <h1 id="1">Acheteur</h1>
                        <p class="mt-3">Vous voulez acheter un appartement ou une maison ? Il faut commencer par d??terminer votre capacit?? d'emprunt, ce qui vous permettra de d??finir votre budget. Vous allez ensuite consulter les annonces. Sur MYHOME.com, vous ??tes directement en contact avec le propri??taire. C'est lui qui va r??pondre ?? vos questions et vous faire visiter son logement ! </p>

                        <p class="mt-3">Quand vous avez trouv?? un bien qui vous pla??t, c'est le moment de faire une offre d'achat. Si le vendeur l'accepte, il ne vous reste plus qu'?? signer le compromis de vente puis l'acte de vente chez le notaire ! </p>
                    </div>
                </div>
                <hr>
                <div class="row">
                        <div class="col-md-5 ml-2 mt-4">
                                <img src="/images/acheteur.png" width="190" alt="">
                        </div>
                        <div class="col-md-6 mt-4">
                            <h1 id="2">Vendeur</h1>
                            <p class="mt-3">Vous voulez vendre votre logement sans passer par une agence ? Vous ??tes au bon endroit ! MYHOME.com vous conseille ?? chaque ??tape et vous fournit les services indispensables pour r??ussir votre vente. </p>
    
                            <p class="mt-3">Nous vous aidons ?? fixer votre prix de vente, ?? cr??er votre annonce, ?? faire des photos vendeuses. Nous avons s??lectionn?? un partenaire fiable pour la r??alisation des diagnostics immobiliers obligatoires. Et nous vous expliquons en d??tail la signature du compromis de vente.  </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                            <div class="col-md-5 ml-2 mt-4">
                                    <img src="/images/bailleur.png" width="190" alt="">
                            </div>
                            <div class="col-md-6 mt-4">
                                <h1 id="3">Bailleur</h1>
                                <p class="mt-3">Vous avez un logement ?? louer ? MYHOME.com vous fournit tout ce dont vous avez besoin de A ?? Z : recherche et s??lection du locataire, signature du contrat de location, ??tat des lieux, relation avec le locataire en cours de bail, gestion des conflits (d??gradations et impay??s)... sans oublier la fiscalit??!</p>
        
                                <p class="mt-3">Si vous passez une annonce sur MYHOME.com, n'oubliez pas que vous pouvez appeler notre assistance technique en cas de besoin. Nos experts sont l?? pour vous aider.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                                <div class="col-md-5 ml-2 mt-4">
                                        <img src="/images/locataire.png" width="190" alt="">
                                </div>
                                <div class="col-md-6 mt-4">
                                    <h1 id="4">Locataire</h1>
                                    <p class="mt-3">Vous cherchez un logement ?? louer ? En passant en direct avec le propri??taire, vous ??conomisez les frais d'agence, soit plusieurs milliers de  Franc CFA ! Tout d'abord, constituez votre dossier, avec les pi??ces justificatives qui prouvent votre solvabilit??. Ensuite, regardez les annonces et contactez directement les propri??taires pour visiter leur logement.</p>
            
                                    <p class="mt-3">Quand vous avez trouv?? un logement qui vous convient, vous n'avez plus qu'?? signer le contrat de location, faire l'??tat des lieux et... d??m??nager !</p>
                                </div>
                            </div>
                            <hr>
            </div>
    </div>


</div>






@endsection


<a href="#" class="back-to-top" style="display: inline;"><i class="fas fa-chevron-up  mt-2"></i></a>