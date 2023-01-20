@extends('layouts.base')

@section('content')

<p>Dit is de over ons pagina</p>
<div class="container text-center">
  <div class="row">
    <div class="col-6 col-sm-3">
        <img src="{{ asset('img/tickets.png') }}" alt="Tickets image" width="400px">
    </div>
    <div class="col-6 col-sm-3">
        <h1>Over ons</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur dolorem ipsam quia nulla eum culpa.</p>
    </div>
    <div class="w-100"></div>
    <div class="col-6 col-sm-3">
        <h1>Ticketsysteem</h1>
    </div>
  </div>
</div>


@endsection