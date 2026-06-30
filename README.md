# GES Boutique

Application web de gestion de boutique développée avec **Laravel 13**. Elle permet de gérer les clients, les produits, les commandes et de générer des factures au format PDF.

## Fonctionnalités

- **Gestion des clients** : création, consultation, modification et suppression des fiches clients (nom, prénom, téléphone, adresse, email).
- **Gestion des produits** : suivi du catalogue (référence, désignation, prix unitaire, stock, description).
- **Gestion des commandes** : création de commandes liées à un client, avec lignes de commande (produit, quantité, prix unitaire).
- **Facturation** : génération de factures liées aux commandes et export en PDF (via DomPDF).
- **Tableau de bord** : vue d'ensemble avec le nombre de clients, produits et commandes.

## Stack technique

- **Backend** : PHP 8.3, Laravel 13
- **Frontend** : Blade, Tailwind CSS 4, Vite
- **Base de données** : SQLite (par défaut, configurable)
- **PDF** : barryvdh/laravel-dompdf
- **Tests** : PHPUnit

## Prérequis

- PHP >= 8.3
- Composer
- Node.js & npm
- Une base de données (SQLite par défaut, MySQL/PostgreSQL possible)

## Installation

1. Cloner le dépôt
   ```bash
   git clone <url-du-repo>
   cd ges_boutique
   ```

2. Installer les dépendances PHP
   ```bash
   composer install
   ```

3. Installer les dépendances front-end
   ```bash
   npm install
   ```

4. Configurer l'environnement
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configurer la base de données dans `.env` (SQLite est utilisé par défaut, le fichier `database/database.sqlite` doit exister)
   ```bash
   touch database/database.sqlite
   ```

6. Lancer les migrations
   ```bash
   php artisan migrate
   ```

7. Compiler les assets et lancer le serveur
   ```bash
   npm run dev
   php artisan serve
   ```

L'application sera accessible sur `http://localhost:8000`, redirigeant automatiquement vers le tableau de bord.

## Structure du projet

```
app/
├── Http/Controllers/   # ClientController, ProduitController, CommandeController, FactureController
└── Models/             # Client, Produit, Commande, LigneCommande, Facture, User

database/
└── migrations/         # Schémas des tables clients, produits, commandes, lignes de commande, factures

resources/views/
├── clients/
├── produits/
├── commandes/
├── factures/
└── dashboard/

routes/
└── web.php             # Routes ressources (clients, produits, commandes) + génération PDF
```

## Routes principales

| Méthode | URI | Description |
|---|---|---|
| GET | `/dashboard` | Tableau de bord |
| GET/POST | `/clients` | Liste / création des clients |
| GET/POST | `/produits` | Liste / création des produits |
| GET/POST | `/commandes` | Liste / création des commandes |
| GET | `/facture/{id}/pdf` | Génération de la facture en PDF |

## Tests

```bash
php artisan test
```

## Licence

Ce projet est distribué sous licence MIT.
