@extends('layouts.main')
<link rel="stylesheet" href="/style/space.css">

@section('contenu')


<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Mon espace</h1>
                <h1 class="tir"></h1>
            </div>
        </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-5 border dineche mt-5">
                <h3 class="text-dark font-weight-bold text-center">Je crée mon compte personnel</h3>
                <p class="mt-4">Votre compte vous permet de gérer au même endroit toutes vos annonces, vos alertes e-mail,et vos favoris.</p>
            <form class="form-inline" method="post" action="{{route('insertdata')}}" >
                    @csrf
                    @if(Session::has('post_register'))
                        <h6 class="text-danger  text-center">{{Session::get('post_register')}}</h6><br>
                    @endif
                <input type="text"  class="form-control mr-sm-2" name="name" id="order"  placeholder="Nom"><br>
                <input type="text"  class="form-control mr-sm-2" name="forname" id="order" class="mt-4" placeholder="Prenom">
                <input type="email"  class="form-control mr-sm-2 mt-4" name="email" id="order"  placeholder="E-mail" class="mt-4"><br>
                <input type="password"  class="form-control mr-sm-2" name="password" id="order" class="mt-4" placeholder="Mot de passe">
                <select name="name_role" id="ordered" class="form-control   mt-4">
                    <option value="Vendeur" selected="selected">Vendeur</option>
                    <option value="Acheteur" >Acheteur</option>
                    <option value="Bailleur">Bailleur</option>
                    <option value="Locataire">Locataire</option>
                </select>
                <div class="custom-control custom-checkbox mt-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">J'accepte de recevoir des offres personnalisées.</label>
                </div>
                <div class="container">
                        <div class="button text-center mt-4">
                            <button type="submit" class="btn btn-primary">Créer mon compte</button>
                        </div>
                </div>
            </form>
                <div class="container mt-3">
                <p><a href="{{route('espace')}}" class="text-primary text-decoration-none">Créer votre compte personnel</a></p>
                </div>
            </div>
    
            
            <div class="col-md-5 offset-md-2 dineche mt-5">
                    <h3 class="text-dark font-weight-bold text-center">Votre compte vous donne accès à</h3>   
                    <div class="row mt-4">
                        <div class="col-md-5">
                            <img src="images/annonces.png" alt="" width="190">
                        </div>
                        <div class="col-md-6 mt-3">
                            <h3>Vos annonces</h3>
                            <p class="mt-3">Gérer vos publications et bénéficiez de nos offres de fidélités.</p>
                        </div> 
                    </div>
                    <div class="row mt-4">
                            <div class="col-md-5">
                                <img src="images/favoris.png" alt="" width="190">
                            </div>
                            <div class="col-md-5 mt-4">
                                <h3>Vos favoris</h3>
                                <p class="mt-3">Retrouvez les annonces que vous séléctionnez</p>
                            </div> 
                        </div>     
            </div>
        </div>
 </div>








@endsection