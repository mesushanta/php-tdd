@extends('layouts.app')

@section('content')
<h1 class="text-3xl font-light">
    All Rooms
</h1>
        Name: Is only for premium<br>
    @foreach($rooms as $room)
        {{ $room->name  }} - {{ $room->only_for_premium_member ? 'Yes' : 'No'  }}<br>

    @endforeach
@endsection
