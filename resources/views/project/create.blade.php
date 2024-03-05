@extends('layout')
{{-- On peut aussi déclarer la section en inline --}}
@section('title')
    Project Create
@endsection

@section('content')
    <h2>Créer un nouveau projet</h2>
    <form method="POST" action="/project">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            @error('title')
                <p style="color:red">{{ $errors->first('title') }}</p>
            @enderror
            <input @error('title') style="border-color:red" @enderror type="text" name="title"
                placeholder="Titre du projet" value="{{ old('title') }}">
        </div>
        <div>
            <textarea name="description" placeholder="Description du projet"></textarea>
        </div>
        <div>
            <button type="submit">Créer le projet</button>
        </div>
    </form>
@endsection
