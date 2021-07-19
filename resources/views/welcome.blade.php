@extends('layouts.main')


@section('contenu')

        <div class="part-image container-fluid">
            <div class=" body  searches">
                <div class="text">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h5 class="font-weight-bold ml-5 mt-3">Trouvez votre logement <br>  sans complexité</h5>
                            <h1 class="tiret text-center ml-5"></h1>
                        </div>
                    </div>   
                </div>
                <div class="container">
                    <div class="row mt-2">
                            <div class="col-lg-6 border">
                                    <a href="#" class="text-body text-decoration-none vente"><h4>Vente</h4></a>
                                </div>
                                <div class="col-lg-6 border">
                                    <a href="#" class="text-body text-decoration-none location"><h4>Location</h4></a>
                             </div>
                    </div>
                    <div class="row mt-2">
                                <div class="col-lg-6 ">
                                        <select name="pets" id="pet-select">
                                                <option value="Lieu"  selected="selected">Ville</option>
                                                <option value="dog">Ouagadougou</option> 
                                        </select>
                                </div>
                                <div class="col-lg-6 ">
                                        <select name="pets" id="pet-select">
                                                <option value="Lieu"  selected="selected">Quartier</option>
                                                <option value="dog">Cissin</option>
                                                <option value="cat">Pissy</option>
                                                <option value="hamster">Rim Kieta</option>
                                                <option value="parrot">Dapoya</option>
                                                <option value="spider">Zagtouli</option>
                                                <option value="goldfish">Ouaga 2000</option>
                                            </select>
                             </div>
                    </div>
                    <div class="row mt-2">
                            <div class="col-lg-12 ">
                                    <select name="pets" id="pet-select">
                                            <option value="Lieu"  selected="selected">Types de bien</option>
                                            <option value="dog">Maison</option>
                                            <option value="cat">Appartement</option>
                                            <option value="hamster">Parking</option>
                                            <option value="parrot">Local commercial</option>
                                            <option value="spider">Local d'activité</option>
                                            <option value="goldfish">Bureaux et locaux professionnels</option>
                                        </select>
                     </div>
                </div>
                <div class="row mt-2">
                        <div class="col-lg-6 ">
                                <select name="pets" id="pet-select">
                                        <option value="Lieu"  selected="selected">Pièces</option>
                                        <option value="dog">1 pièce</option>
                                        <option value="cat">2  pièces</option>
                                        <option value="hamster">3 pièces</option>
                                        <option value="parrot">4 pièces</option>
                                        <option value="spider">5 pièces</option>
                                        <option value="goldfish">6 pièces et +</option>
                                </select>
                        </div>
                        <div class="col-lg-6 ">
                                <select name="pets" id="pet-select">
                                        <option value="Lieu"  selected="selected">Chambres</option>
                                        <option value="dog">1 chambre</option>
                                        <option value="cat">2 chambres</option>
                                        <option value="hamster">3 chambres</option>
                                        <option value="parrot">4 chambres</option>
                                        <option value="spider">5 chambres</option>
                                        <option value="goldfish">6 chambres et +</option>
                                    </select>
                        </div>
                </div>
                 <div class="row">
                     <div class="col-lg-6">
                            <input type="text" name="" id="" class="mt-2 puter" value= "m²" placeholder="Surface minimum">
                     </div>
                     <div class="col-lg-6">
                            <input type="text" name="" id="" class="mt-2 puter" value= "FCFA" placeholder="Prix maximum">
                     </div>
                 </div>
                 <div class="cloche mt-4 d-flex">
                    <div class="col cloche">
                            <a href="#" class="text-decoration-none"><p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                            </svg></p></a>
                    </div>
                    <div class="col1 alerte cloche">
                            @if (Session()->has('success'))
                                 <div >
                                    <div class="alert alert-success">
                                         {{Session()->get('success') }}
                                    </div>
                                </div>
                            @endif
                            @if (Session()->has('faillure'))
                                 <div >
                                    <div class="alert alert-success">
                                         {{Session()->get('faillure') }}
                                    </div>
                                </div>
                            @endif
                                <form action="{{route('test')}}" method="POST">
                            @csrf
                                <a href="#" class="text-decoration-none" data-toggle="modal" data-target="#exampleModal">Créer une alerte</a> <!-- Begin Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Créer une alerte</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                            </div>
                                            <div class="modal-body">
                                                        <p>Indiquez votre adresse e-mail pour recevoir toutes les nouvelles annonces correspondant à votre recherche.</p>
                                                        <input type="email" class="form-control formel" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
                                            </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-dark">valider</button>
                                                    </div>
                                            </div>
                                        </div>
                                </div>  <!-- End Modal -->  
                        </form>                        
                     </div>      
                 </div>
                     <button class="btn btn-primary" type="submit" name="search" id="search">Recherche</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <P class="font-weight-bold text-white description ">Alain a économisé <br> 50.000 FCFA de frais d'agence</P>
            </div>
        </div>

    </div>
      
  
    
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 ">
            <h3 class="text-uppercase opacite">Propriétaires</h3>
            <h4 class="font-weight-bold">Vous avez <br> un  logement à vendre ?</h4>
            <h4 class="tire"></h4>
            <p>De la recherche d'un acquéreur à l'estimation <br> du prix de vente, on s'occupe de tout.</p>
            <a href="/vendre"><button  class="btn btn-primary" type="button">Je veux vendre</button></a>
        </div>
        <div class="col-md-4 offset-md-4  ">
            <h3 class="text-uppercase opacite">Propriétaires</h3>
            <h4 class="font-weight-bold">Vous avez <br> un  logement à louer ?</h4>
            <h4 class="tire"></h4>
            <p>Trouvez un locataire sérieux et <br> ponctuel à ses rendez-vous.</p>
        <a href="/locationa"><button  class="btn btn-success" type="button">Je veux louer</button></a>
        </div>
    </div>

</div>





<div class="container-fluid outer-divi" id="marger">
    <div class="container">
        <div class="mt-5">
                <h3 class="">Ils ont vendu ou loué grâce à MY HOME !</h3>
                <h4 class="tired"></h4>
        </div>
    </div>
    <div class="container inner-divi">
            <div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
                    {{-- <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol> --}}
                    <div class="carousel-inner">
                    <div class="carousel-item active d-flex">
                        <div style="width:65%;">
                            <img src="images/maison.png" class="d-block w-100" alt="..." width="100%" height="500px">
                        </div>
                        <div class="gauche arriere" style="width:40%; height:240px; box-shadow: 3px 3px 20px rgb(68, 68, 70);">
                           <span class="font-weight-bold malt pl-4 ">Supasse de loin les agences</span>
                           <p class="mt-4 ml-4">Simple, pratique, efficace. Pour la location, surpasse de loin les agences !</p>
                           <span class="ml-4 malt font-weight-bold">Alain GUIGMA</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="width:65%;">
                             <img src="images/maison1.png" class="d-block w-100" alt="..." width="50%" height="500px">
                        </div>
                        <div class="gauche arriere" style="width:40%; height:270px; box-shadow: 3px 3px 20px rgb(68, 68, 70);">
                                <span class="font-weight-bold malt pl-4 ">Très bonne évaluation du bien</span>
                                <p class="mt-4 ml-4">Je suis très satisfait des très bons soins,conseils, contacts, photos et reportage 3D pour la vente de Mon
                                    appartement, vente réalisée dans des délais très courts. Très bonne évaluation de la valeur du bien. Je remercie MY HOME pour
                                    ses prestations. je n'hésiterai pas à conseiller MY HOME à mes proches.
                                </p>
                                <span class="ml-4 malt font-weight-bold">MIHIN HUGUES Aimé</span>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="width:65%;">
                                <img src="images/maison2.png" class="d-block w-100" alt="..." width="50%" height="500px">
                         </div>
                         <div class="gauche arriere" style="width:40%; height:240px; box-shadow: 3px 3px 20px rgb(68, 68, 70);">
                                <span class="font-weight-bold malt pl-4 ">Efficaité, fluidité et transparence</span>
                                <p class="mt-4 ml-4">Efficacité, rapidité, fluidité et transparence, je recommande largement MY HOME.</p>
                                <span class="ml-4 malt font-weight-bold">TIENDREBEOGO Leila</span>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div> 
        </div>
    </div>
</div>





<div class="container-fluid marte margerr">
        <div class="container">
            <div class="">
                    <h3 class="">Ils vendent et mettent en location grâce à MY HOME !</h3>
                    <h4 class="tired"></h4>
            </div>
        </div>
        <div class=" container  mt-5">
                <div class="row">
                    <div class="col-md-4 post">
                            <div class="card post" style="width: 18rem;box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                    <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                    <div class="card-body">
                                      <p class="card-text">Maison Mini Villa</p>
                                    </div>
                            </div>
                    </div>
                    <div class="col-md-4 ">
                            <div class="card postes" style="width: 18rem;box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                    <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                    <div class="card-body">
                                      <p class="card-text">Bureaux professionnels</p>
                                    </div>
                            </div>
                    </div>
                    <div class="col-md-4 ">
                            <div class="card poste" style="width: 18rem;box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                    <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                    <div class="card-body">
                                      <p class="card-text">Parking </p>
                                    </div>
                            </div>
                    </div>
                </div>


                <div class="row mt-5">
                        <div class="col-md-4">
                                <div class="card  postes" style="width: 18rem; box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                        <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                        <div class="card-body">
                                          <p class="card-text">Local commercial</p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4">
                                <div class="card poste" style="width: 18rem;box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                        <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                        <div class="card-body">
                                          <p class="card-text">Appartement</p>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4 ">
                                <div class="card post" style="width: 18rem; box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                        <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                        <div class="card-body">
                                          <p class="card-text">Immeuble grand standing</p>
                                        </div>
                                </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                            <div class="col-md-4">
                                    <div class="card postes" style="width: 18rem; box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                            <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                            <div class="card-body">
                                              <p class="card-text"></p>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="card post" style="width: 18rem;box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                            <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                            <div class="card-body">
                                              <p class="card-text">Grand villa</p>
                                            </div>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="card poste" style="width: 18rem;box-shadow: 3px 3px 3Px 3px rgb(68, 68, 70);">
                                            <img src="images/maison.png" class="card-img-top" alt="..." width="100%" height="100px">
                                            <div class="card-body">
                                              <p class="card-text">Immeuble R+4</p>
                                            </div>
                                    </div>
                            </div>
                    </div>
         </div> 
 </div> 







 






 


 @endsection
