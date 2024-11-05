@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Détails de la Matière</h1>

    <table class="table table-bordered">
        <tr>
            <th>Code de la Matière</th>
            <td>{{ $matiere->codemat }}</td>
        </tr>
        <tr>
            <th>Libellé</th>
            <td>{{ $matiere->libelle }}</td>
        </tr>
        <tr>
            <th>Coefficient</th>
            <td>{{ $matiere->coef }}</td>
        </tr>
    </table>

    <a href="{{ route('matieres.index') }}" class="btn btn-secondary">Retour à la liste</a>
</div>
@endsection
