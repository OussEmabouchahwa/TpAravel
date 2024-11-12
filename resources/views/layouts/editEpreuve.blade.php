<!-- resources/views/layouts/editEpreuve.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Épreuve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Modifier l'Épreuve</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('epreuve.update', $epreuve->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="numepreuve" class="form-label">Numéro de l'épreuve</label>
            <input type="number" name="numepreuve" id="numepreuve" class="form-control" value="{{ $epreuve->numepreuve }}" required>
        </div>
        <div class="mb-3">
            <label for="datepreuve" class="form-label">Date de l'épreuve</label>
            <input type="date" name="datepreuve" id="datepreuve" class="form-control" value="{{ $epreuve->datepreuve }}" required>
        </div>
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu</label>
            <input type="text" name="lieu" id="lieu" class="form-control" value="{{ $epreuve->lieu }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>

    <a href="{{ route('epreuve.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
