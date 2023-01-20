@extends('layouts.base')

@section('content')

<div class="headTextEventList">
    <h1>Add event here</h1>
</div>

<div class="row ">
    <div class="col-lg-7 mx-auto">
      <div class="card mt-2 mx-auto p-4 bg">
          <div class="card-body bg">
     
          <div class = "container">
                           <form id="contact-form" role="form" action="{{ route('save-event-form') }}" method="POST">
                            @csrf

          

          <div class="controls">

              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_name">Event name *</label>
                          <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter an Event name *" required="required" data-error="Het invullen van uw voornaam is verplicht!">
                          
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_photo">Photo *</label>
                          <input id="form_photo" type="text" name="photo" class="form-control" placeholder="Please select a picture *" required="required" data-error="Het invullen van uw achternaam is verplicht!">
                                                          </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="form_event_start">Event start *</label>
                          <input id="form_event_start" type="date" name="event_start" class="form-control" placeholder="Please enter an start date for the event *" required="required" data-error="Er is een geldig email adres nodig!">
                          
                      </div>
                  </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_event_end">Event end *</label>
                        <input id="form_event_end" type="date" name="event_end" class="form-control" placeholder="Please enter an end date for the event *" required="required" data-error="Er is een geldig email adres nodig!">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_available_tickets">Available tickets *</label>
                        <input id="form_available_tickets" type="number" name="available_tickets" class="form-control" placeholder="Please enter the amound of tickets available *" required="required" data-error="Er is een geldig email adres nodig!">
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_location">Location *</label>
                        <input id="form_location" type="text" name="location" class="form-control" placeholder="Please enter an location *" required="required" data-error="Er is een geldig email adres nodig!">
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="form_price">Price *</label>
                        <input id="form_price" type="number" name="price" class="form-control" placeholder="Please enter price of the ticket *" required="required" data-error="Er is een geldig email adres nodig!">
                        
                    </div>
                </div>
            </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="form_description">Description *</label>
                          <textarea id="form_description" name="description" class="form-control" placeholder="Please write a description for the ticket" rows="4" required="required" data-error="Laat alstublieft een bericht achter"></textarea
                              >
                          </div>

                      </div>


                  <div class="col-md-12">

                      <div class="col-md-12 text-center">
                      <input type="submit" class="btn btn-dark btn-send btn-border pt-2 btn-block" value="Submit ticket" >
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