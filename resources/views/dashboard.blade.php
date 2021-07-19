@extends('layouts.main')
<link rel="stylesheet" href="/style/dashboard.css">
@section('contenu')




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Recherche" aria-label="Search">
    <ul class="navbar-nav px-3">
        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>

    </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item mt-3">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              <a class="dropdown text-body  text-decoration-none" href="/annonce"><i class="far fa-file-alt text-bold"></i>&nbsp;&nbsp;{{ __('Mes annonces') }}<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <div class="dropdown">
                    <a class="dropdown text-body  text-decoration-none" href="/alertemail"><i class="fas fa-envelope text-body" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>&nbsp;&nbsp;{{ __('Mes alertes e-mail') }}    
            </div>
          </li>
          <li class="nav-item mt-4">
              <div class="dropdown">
              <a class="dropdown text-body  text-decoration-none"href="{{route('favorites')}}"><i class="fas fa-cart-plus text-body"></i>&nbsp;&nbsp;{{ __('Mes favoris') }}
                </a>
              </div>
          </li>
          <li class="nav-item mt-3">
              <div class="dropdown">
                  <a class="dropdown text-body  text-decoration-none" role="button"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"href="#"><i class="fas fa-cart-plus text-body"></i>&nbsp;&nbsp;{{ __('Gérer mon compte') }}
              </a>
              
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <form action="" method="post">
                      <a class="dropdown" href="#">Changer mot de passe</a>
                </form>
                <form action="post" method="post">
                  <a class="dropdown" href="#">Supprimer mon compte</a>
                </form>
                </div>
            </div>
          </li>
          <li class="nav-item mt-3">
              <a class="dropdown text-body text-decoration-none" href="{{route('espace') }}"><i class="fas fa-power-off text-body"></i>&nbsp;&nbsp;{{ __('Déconnexion') }}
          </li> 
        </ul>  
      </div>
    </nav>
  </div>
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>







@endsection