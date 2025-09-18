@extends('layouts.app')
@section('content')

    <div class="container">
        <h1 class="mb-4">Liste des Cours</h1>

        @if(session('success'))
            <p style="background: green; color: white; padding: 8px; border-radius: 4px;">
                {{ session('success') }}
            </p>
        @endif
        <table class="table table-bordered">
            <thead class="table-light">
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Durée</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($cours as $coursItem)
                <tr>
                    <td>{{ $coursItem->titre }}</td>
                    <td>{{ $coursItem->description }}</td>
                    <td>{{ $coursItem->duree }} heures</td>
                    <td>
                        <form action="{{ route('cours.destroy', $coursItem->id) }}" method="POST"
                              onsubmit="return confirm('Voulez-vous vraiment supprimer ce cours ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                        <a href="{{ route('cours.edit', $coursItem->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Aucun cours disponible</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
