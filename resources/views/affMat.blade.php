@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des Matières</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><i class="fas fa-hashtag"></i> Code</th>
                <th>Libellé</th>
                <th><i class="fas fa-calculator"></i> Coefficient</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matieres as $matiere)
            <tr>
                <td>{{ $matiere['codemat'] }}</td>
                <td>{{ $matiere['libelle'] }}</td>
                <td>{{ $matiere['coef'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if(empty($matieres))
        <p class="text-center">Aucune matière n'est disponible.</p>
    @endif
    
</div>
@endsection