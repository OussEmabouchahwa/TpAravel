@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des Matières</h1>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Button to Add New Matière -->
    <a href="{{ route('matieres.create') }}" class="btn btn-primary mb-3">Ajouter une Matière</a>

    <!-- Table of Matières -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Code de la Matière</th>
                <th>Libellé</th>
                <th>Coefficient</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($matieres as $matiere)
        <tr>
            <td>{{ $matiere->codemat }}</td>
            <td>{{ $matiere->libelle }}</td>
            <td>{{ $matiere->coef }}</td>
            <td>
                <!-- Show Button -->
                <a href="{{ route('matieres.show', $matiere) }}" class="btn btn-info btn-sm">Afficher</a>

                <!-- Edit Button -->
                <a href="{{ route('matieres.edit', $matiere) }}" class="btn btn-warning btn-sm">Modifier</a>

                <!-- Delete Form -->
                <form action="{{ route('matieres.destroy', $matiere) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette matière ?')">Supprimer</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
    </table>
</div>
@endsection
