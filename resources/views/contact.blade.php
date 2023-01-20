@extends('layouts.base')

@section('content')

<p>Dit is de contact pagina</p>

<div class="container"> 
        <div class=" text-center mt-5 ">

            <h1 >Contacteer ons</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg">
            <div class="card-body bg">
       
            <div class = "container">
                             <form id="contact-form" role="form">

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Voornaam *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Vul alstublieft een voornaam in *" required="required" data-error="Het invullen van uw voornaam is verplicht!">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Achternaam *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Vul alstublieft een achternaam in *" required="required" data-error="Het invullen van uw achternaam is verplicht!">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Vul alstublieft uw email in *" required="required" data-error="Er is een geldig email adres nodig!">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Specifeer het probleem *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Specifeer het probleem!">
                                <option value="" selected disabled>--Selecteer uw probleem--</option>
                                <option >Er is iets mis met mijn bestelling</option>
                                <option >Waar blijft mijn bestelling</option>
                                <option >Ik heb nog geen terugbetaling ontvangen</option>
                                <option >Anders</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Bericht *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Schrijf hier uw bericht" rows="4" required="required" data-error="Laat alstublieft een bericht achter"></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">

                        <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-dark btn-send btn-border pt-2 btn-block" value="Verzend bericht" >
                        </div>
                        
                    
                </div>
          
                </div>


        </div>
         </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>


@endsection