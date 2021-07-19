@extends('layouts.main')
<link rel="stylesheet" href="/style/favoris.css">
@section('contenu')


<div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h1>Mes Favoris</h1>
                <h1 class="tir"></h1>
            </div>
        </div>
</div>


<div class="container favoris mt-5 ">
    <div class="favorite text-center">
        <p class="text-primary text-center">Vous n'avez pas  de favoris enregistrés !</p>
    </div>
</div>


@endsection