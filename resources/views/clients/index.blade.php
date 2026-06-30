<!DOCTYPE html>
<html>
<head>
    <title>Liste des Clients</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Gestion des Clients</h2>

<a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">
    Ajouter un client
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Actions</th>
    </tr>

    @foreach($clients as $client)
    <tr>
        <td>{{ $client->id }}</td>
        <td>{{ $client->nom }}</td>
        <td>{{ $client->prenom }}</td>
        <td>{{ $client->telephone }}</td>
        <td>{{ $client->email }}</td>
        <td>
            <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-warning">
                Modifier
            </a>

            <form action="{{ route('clients.destroy',$client->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger">
                    Supprimer
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>
