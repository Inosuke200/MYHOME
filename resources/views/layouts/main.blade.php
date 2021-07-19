<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>MY HOME</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/style/style.css">
        {{-- <link rel="stylesheet" href="/style/code.css"> --}}
        <link rel="stylesheet" href="/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/style/navbar.css">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-sm navbar-light bg-white few">
                    <a class="navbar-brand" href="/"><div class="" ><img src="images/logos1.png" width="17%" height="97px" alt=""></div></a>
                    <div class=" mar" ><button class="navbar-toggler   " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button></div>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ">
                            <li class="nav-item active dropdown itm mr-2">
                            <a class="nav-link  lien helper" href="{{route('home')}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><button type="text" class="btn btn-primary  but "> Déposer une annonce</button> <span    class="sr-only">(current)</span></a>
                                <ul class="dropdown-menu contour helper-dropdown" aria-labelledby="navbarDropdownMenuLink">
                                        <li class="border-bottom"><a class="dropdown-item lien" href="{{ route('espace') }}">Vente immobilière</a></li>
                                        <li><a class="dropdown-item lien" href="{{ route('espace') }}">Location immobilière</a></li>
                                </ul>
                            </li>
                            <li class="nav-item itm mt-2 dropdown">
                                <a class="nav-link lien help" href="#"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="accordion">Aide</a>
                                <ul class="dropdown-menu help-dropdown contour" aria-labelledby="navbarDropdownMenuLink">
                                        <li class="border-bottom"><a class="dropdown-item lien" href="../users/#1">Je suis acheteur</a></li>
                                        <li class="border-bottom"><a class="dropdown-item lien" href="../users/#2">Je suis vendeur</a></li>
                                        <li class="border-bottom"><a class="dropdown-item lien" href="../users/#3">Je suis bailleur</a></li>
                                        <li ><a class="dropdown-item lien" href="../users/#4">Je suis locataire</a></li>
  
                                </ul>
                            </li>
                            <li class="nav-item itm mt-2">
                            <a class="nav-link  lien" href="{{route('espace')}}">Mon espace</a>
                            </li>
                            <li class="nav-item itm mt-2">
                                <a class="nav-link lien" href="{{route('contact')}}">Contactez-nous</a>
                            </li>
                        </ul>  
                    </div>
            </nav>
        </header>


                @yield('contenu')

                <footer>
                        <div class="container-fluid d-flex justify-content-center align-items-center text-center mt-5 copy">     
                                <p class="text-white texte"> &copy; Copyright <strong> 2021 by MY HOME</strong>. Tous droits réservés. &nbsp; &nbsp; &nbsp; <strong>Burkina Faso</strong></p>   
                        </div>
                </footer>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
                <script src="../js/menu-deroulant.js"></script>           
    </body>
 </html>