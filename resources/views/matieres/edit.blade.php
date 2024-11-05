@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Modifier la Matière</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matieres.update', $matiere->codemat) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="codemat">Code de la Matière</label>
            <input type="text" class="form-control" id="codemat" name="codemat" value="{{ $matiere->codemat }}" required>
        </div>

        <div class="form-group">
            <label for="libelle">Libellé</label>
            <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $matiere->libelle }}" required>
        </div>

        <div class="form-group">
            <label for="coef">Coefficient</label>
            <input type="number" class="form-control" id="coef" name="coef" value="{{ $matiere->coef }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Modifier la Matière</button>
    </form>
</div>
@endsection
