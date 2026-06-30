<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h2>Ajouter un client</h2>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf

    <input type="text" name="nom" class="form-control mb-2" placeholder="Nom">

    <input type="text" name="prenom" class="form-control mb-2" placeholder="Prénom">

    <input type="text" name="telephone" class="form-control mb-2" placeholder="Téléphone">

    <input type="text" name="adresse" class="form-control mb-2" placeholder="Adresse">

    <input type="email" name="email" class="form-control mb-2" placeholder="Email">

    <button class="btn btn-success">
        Enregistrer
    </button>
</form>

</body>
</html>
