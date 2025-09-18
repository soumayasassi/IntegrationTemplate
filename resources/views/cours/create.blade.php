
@extends('layouts.app')
@section('content')
    <h1>Créer un cours</h1>
<form action="{{ route('cours.store') }}" method="POST">
    @csrf
    <div>
        <label for="titre">Titre :</label>
        <input type="text" name="titre" id="titre">
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <div>
        <label for="duree">Durée :</label>
        <input type="number" name="duree" id="duree">
    </div>
    <button type="submit">Créer</button>
</form>




@endsection
