<!DOCTYPE html>
<html>
<head>
    <title>Commandes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Liste des Commandes</h2>

<a href="{{ route('commandes.create') }}" class="btn btn-primary mb-3">
    Nouvelle Commande
</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Client</th>
        <th>Date</th>
        <th>Montant</th>
    </tr>

    @foreach($commandes as $commande)
    <tr>
        <td>{{ $commande->id }}</td>
        <td>{{ $commande->client->nom }}</td>
        <td>{{ $commande->date_commande }}</td>
        <td>{{ $commande->montant_total }} FCFA</td>
    </tr>
    @endforeach

</table>

</body>
</html>
