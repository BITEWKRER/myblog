@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>

    @if (count($Services)>0)
        <ul class="list-group">
            @foreach($Services as $Server)
                <li class="list-group-item">{{$Server}}</li>
            @endforeach
        </ul>
    @endif

@endsection
