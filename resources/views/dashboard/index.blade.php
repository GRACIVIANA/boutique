@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="bg-primary text-white p-5 rounded shadow mb-4">
        <h1 class="display-4">
            Bienvenue chez BOUTIQUE.ALI
        </h1>

        <p class="lead">
            Système moderne de gestion commerciale : clients, produits, commandes et factures.
        </p>

        <hr>

        <p>
            Gérez efficacement votre boutique grâce à une plateforme rapide, sécurisée et professionnelle.
        </p>
    </div>

    <div class="row">

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Clients
                    </h5>

                    <h1>
                        {{ $clients }}
                    </h1>

                    <p>Clients enregistrés</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Produits
                    </h5>

                    <h1>
                        {{ $produits }}
                    </h1>

                    <p>Produits disponibles</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Commandes
                    </h5>

                    <h1>
                        {{ $commandes }}
                    </h1>

                    <p>Commandes effectuées</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card text-center shadow border-0">
                <div class="card-body">
                    <h5 class="card-title text-primary">
                        Factures
                    </h5>

                    <h1>
                        {{ $factures }}
                    </h1>

                    <p>Factures générées</p>
                </div>
            </div>
        </div>

    </div>

    <div class="card mt-5 shadow border-0">
        <div class="card-body">

            <h3 class="text-primary">
                À propos de BOUTIQUE.ALI
            </h3>

            <p>
                BOUTIQUE.ALI est une plateforme de gestion commerciale
                conçue pour faciliter le suivi des clients, des produits,
                des commandes et des factures.
            </p>

            <p>
                Cette application permet d'améliorer la gestion quotidienne
                de la boutique tout en offrant une meilleure expérience utilisateur.
            </p>

        </div>
    </div>

</div>

@endsection