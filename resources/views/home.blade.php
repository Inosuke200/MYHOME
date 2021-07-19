@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
              

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection






            <nav class="navbar navbar-expand-lg navbar-light bg-white few">
                    <a class="navbar-brand" href="#"><div class="" ><img src="images/logos1.png" width="17%" height="97px" alt=""></div></a>
                    <div class=" mar" ><button class="navbar-toggler   " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button></div>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ">
                            <li class="nav-item active itm">
                            <a class="nav-link lien" href="#"><button type="text" class="btn btn-primary  but "> Déposer une annonce</button> <span    class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item itm mt-2">
                            <a class="nav-link lien  " href="#" >Aide</a>
                            </li>
                            <li class="nav-item itm mt-2">
                            <a class="nav-link  lien" href="#">Mon espace</a>
                            </li>
                            <li class="nav-item itm mt-2">
                                <a class="nav-link lien" href="#">Contactez-nous</a>
                            </li>
                        </ul>  
                    </div>
            </nav>








       
