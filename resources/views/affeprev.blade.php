@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des l'eprive</h1>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><i class="fas fa-hashtag"></i> Numéro</th>
                <th>Date</th>
                <th><i class="fas fa-calculator"></i> Lieu</th>
            </tr>
        </thead>
        <tbody>
        @foreach($epreuves as $epreuve)
            <tr>
                <td>{{ $epreuve->numepreuve }}</td>
                <td>{{ $epreuve->datepreuve }}</td>
                <td>{{ $epreuve->lieu }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

 
</div>
@endsection