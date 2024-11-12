<!-- resources/views/layouts/showEpreuve.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Épreuve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1>Détails de l'Épreuve</h1>

    <div class="card">
        <div class="card-header">
            Épreuve #{{ $epreuve->id }}
        </div>
        <div class="card-body">
            <p><strong>Numéro de l'Épreuve:</strong> {{ $epreuve->numepreuve }}</p>
            <p><strong>Date de l'Épreuve:</strong> {{ $epreuve->datepreuve }}</p>
            <p><strong>Lieu:</strong> {{ $epreuve->lieu }}</p>
        </div>
    </div>

    <a href="{{ route('epreuve.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
