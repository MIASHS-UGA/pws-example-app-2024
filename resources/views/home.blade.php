@extends('layout')
{{-- On peut aussi déclarer la section en inline --}}
@section('title','Home')


@section('content')

<ul>
    @foreach ($tasks as $task )
        <li>{{ $task }}</li>
    @endforeach
</ul>

@endsection

