@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="mb-4">Modifier le cours</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('cours.update', $cours->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Méthode PUT pour la mise à jour -->

            <div class="mb-3">
                <label for="titre" class="form-label">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre"
                       value="{{ old('titre', $cours->titre) }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>
                    {{ old('description', $cours->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="duree" class="form-label">Durée (heures)</label>
                <input type="number" class="form-control" id="duree" name="duree"
                       value="{{ old('duree', $cours->duree) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('cours.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
