@extends('layouts.base')

@section('content')

<div class="headTextEventList">
    <h1>Manage events here</h1>
</div>


<Table>
    <thead>
        <th>
            Naam
        </th>
        <th>
            Locatie
        </th>
        <th>Acties</th>
    </thead>
    <tbody>
        @foreach ($events as $event)
        <tr>
            <td>
                {{ $event->name }}
            </td>
            <td>
                {{ $event->location }}
            </td>
            <td>
                <a href="{{ route('delete-event', $event->id) }}">Delete</a>
            </td>
            <td>
                <a href="{{ route('change-event-form', $event->id) }}">Change</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</Table>

<a href="{{ route('add-event-form') }}" class="btn btn-dark btn-send btn-border pt-2 btn-block">Add Event</a>
@endsection