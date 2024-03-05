@extends('layout')
{{-- On peut aussi déclarer la section en inline --}}
@section('title','Home')


@section('content')
@auth
Bonjour {{ Auth::user()->name }}!
@else
Bonjour vous n'êtes pas authentifié <a href="{{ route('login') }}">Log in</a>
@endauth
<ul>
    @foreach ($tasks as $task )
        <li>{{ $task }} test</li>
    @endforeach
</ul>

@endsection


