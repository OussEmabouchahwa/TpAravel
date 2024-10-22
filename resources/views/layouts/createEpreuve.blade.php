@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Ajouter une nouvelle Épreuve</h1>

    <form action="{{ route('epreuve.store') }}" method="POST">
        @csrf
        <div class="form-group">
       <label for="numepreuve">Numéro d'Épreuve</label>
       <input type="text" class="form-control" id="numepreuve" name="numepreuve" required>
        </div>
        <div class="form-group">
            <label for="datepreuve">Date de l'Épreuve</label>
            <input type="date" class="form-control" id="datepreuve" name="datepreuve" required>
        </div>
        
        <div class="form-group">
            <label for="lieu">Lieu</label>
            <input type="text" class="form-control" id="lieu" name="lieu" required>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter l'Épreuve</button>
    </form>
</div>
@endsection
