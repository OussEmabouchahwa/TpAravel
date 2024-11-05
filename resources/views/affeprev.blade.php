@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Liste des Épreuves</h1>

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Your existing code to list the epreuves -->
    <table class="table">
        <thead>
            <tr>
                <th>Numéro d'Épreuve</th>
                <th>Date de l'Épreuve</th>
                <th>Lieu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($epreuves as $epreuve)
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
