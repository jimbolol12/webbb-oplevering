@extends('layouts.base')

@section('content')

<div class="headTextEventList">
    <h1>Order an ticket</h1>
</div>
<div class="row card-margin">
    @foreach ($events as $event)
    <div class="card bg mb-3 mx-auto" style="width: 17rem;">
        <img class="card-img-top" src="https://via.placeholder.com/150" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title text-center">{{ $event->name }}</h5>
        <p class="card-text text-center">{{ $event->description }}</p>
        <a href="#" class="btn btn-dark btn-border btn-send col-md-12 text-center">See this event</a>
        </div>
    </div>
    @endforeach
</div>
@endsection