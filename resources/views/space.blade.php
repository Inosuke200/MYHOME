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
        <div class="col-md-5 border dinech mt-5">
            <h3 class="text-warning text-center">Je me connecte à mon compte</h3>
            <p class="mt-4">Votre compte vous permet de gérer au même endroit toutes vos annonces, vos alertes e-mail,et vos favoris.</p>
        <form class="form-inline" method="post" action="{{route('espace')}}" >
            @csrf
            <input type="email"  class="form-control mr-sm-2" name="email" id="order"  placeholder="E-mail"><br>
            <input type="password"  class="form-control mr-sm-2" name="password" id="order" class="mt-4" placeholder="Mot de passe">

            <div class="container">
                    <div class="button text-center mt-4">
                        <button type="submit" class="btn btn-primary"><a href="/dashboard" class="text-white text-decoration-none">Se connecter</a></button>
                    </div>
            </div>
        </form>
            <div class="container mt-4">
            <p><a href="{{route('espace_1')}}" class="text-dark text-decoration-none">Créer votre compte</a></p>
                    <p><a href="#" class="text-primary text-decoration-none">Mot de passe oublié ?</a> </p>
            </div>
        </div>

        
        <div class="col-md-5 offset-md-2 border dinech mt-5">
                <h3 class="text-warning text-center">Accès direct par référence</h3>
                <p class="mt-4">Accédez à votre espace propriétaire en utilisant la référence confidentielle qui vous a été communiquée.</p>
            <form class="form-inline" method="post" action="">

                <input type="text" class="form-control " name="reference" id="order"  class="outline" placeholder="Votre référence confidentielle">
    
                <div class="container">
                        <div class="button text-center mt-4">
                            <p>Votre référence confidentielle vous a été envoyée par email ou par courrier lors de votre souscription à notre newsletter.(Exemple :065/2021-MH)</p>
                        </div>
                </div>
                <div class="container">
                        <div class="button text-center mt-3">
                                <button type="submit" class="btn btn-primary">Accéder à votre espace.</button>
                        </div>
                 </div>
            </form>
                 <div class="container mt-3">
                        <p>Vous avez perdu votre référence ?<br>Contactez-nous au <a href="https://api.whatsapp.com/send?phone=22660185425">+226 60185425</a></p>
                       
                </div>
        </div>
    </div>
</div>

@endsection