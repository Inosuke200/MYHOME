@extends('layouts.main')


@section('contenu')
<link rel="stylesheet" href="/style/contact.css">

    <section id="contact" class="contact">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contactez-nous</p>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4>Localisation:</h4>
                            <p>Rue 17.189, Ouagadougou , pissy secteur 26</p>
                        </div>
                        <div class="email">
                            <i class="fas fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>myhome@gmail.com</p>
                        </div>
        
                        <div class="phone">
                            <i class="fas fa-phone-alt"></i>
                            <h4>Appel:</h4>
                            <p>+226 60185425</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                    <form action="{{route('test')}}" method="post" role="form" class="php-email-form">
                            @csrf
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                {{ session()->get('message') }}
                                </div>
                            @endif

                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                                <input type="text" class="form-control" name="sujet" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                        </div>
                        <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                        </div>
                                <div class="mb-3"> 
                        </div>
                                <div class="text-center">
                                    <button type="submit">Envoyer</button>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
   @endsection

   



