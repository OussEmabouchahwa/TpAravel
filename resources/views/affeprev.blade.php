<!-- resources/views/affeprev.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Épreuves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Liste des Épreuves</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('epreuve.create') }}" class="btn btn-primary mb-3">Ajouter une Épreuve</a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Numéro de l'épreuve</th>
                <th>Date de l'épreuve</th>
                <th>Lieu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($epreuves as $epreuve)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $epreuve->numepreuve }}</td>
                    <td>{{ $epreuve->datepreuve }}</td>
                    <td>{{ $epreuve->lieu }}</td>
                    <td>
                        <!-- Show Button -->
                        <a href="{{ route('epreuve.show', $epreuve->id) }}" class="btn btn-info btn-sm">Afficher</a>
                        
                        <!-- Edit Button -->
                        <a href="{{ route('epreuve.edit', $epreuve->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        
                        <!-- Delete Button -->
                        <form action="{{ route('epreuve.destroy', $epreuve->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
