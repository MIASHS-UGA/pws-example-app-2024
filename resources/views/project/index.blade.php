@extends('layout')
{{-- On peut aussi déclarer la section en inline --}}
@section('title')
 Project Index
@endsection

@section('content')

<ul>
    @foreach ($projects as $project)
    <li>{{ $project->title }} -- {{$project->user->name}}</li>
    @endforeach
</ul>

<a href="/project/create">Créer un nouveau projet</a>

@endsection


