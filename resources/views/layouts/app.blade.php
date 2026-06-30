<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>BOUTIQUE.ALI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
}

body{
background:#edf4ff;
}

/*********************
SIDEBAR
*********************/

.sidebar{

position:fixed;

left:0;

top:0;

width:260px;

height:100vh;

background:linear-gradient(180deg,#0d47a1,#1565c0,#1976d2);

box-shadow:5px 0 20px rgba(0,0,0,.2);

padding-top:25px;

}

.logo{

text-align:center;

padding-bottom:25px;

border-bottom:1px solid rgba(255,255,255,.2);

margin-bottom:20px;

}

.logo i{

font-size:55px;

color:#FFD54F;

}

.logo h2{

color:white;

font-weight:bold;

margin-top:10px;

}

.logo p{

color:#E3F2FD;

font-size:14px;

}

.sidebar a{

display:block;

padding:15px 25px;

margin:8px 15px;

color:white;

text-decoration:none;

border-radius:12px;

font-size:17px;

transition:.3s;

}

.sidebar a i{

width:30px;

}

.sidebar a:hover{

background:white;

color:#1565c0;

padding-left:35px;

}

/*********************
CONTENU
*********************/

.main{

margin-left:260px;

padding:30px;

}

/*********************
TOPBAR
*********************/

.topbar{

background:linear-gradient(135deg,#0d47a1,#1976d2);

padding:25px 35px;

border-radius:20px;

display:flex;

justify-content:space-between;

align-items:center;

box-shadow:0 10px 30px rgba(13,71,161,.25);

margin-bottom:35px;

}

.topbar h2{

color:white;

font-weight:bold;

margin:0;

font-size:30px;

}

.topbar h2 span{

color:#FFD54F;

}

.topbar p{

margin-top:6px;

color:#E3F2FD;

margin-bottom:0;

}

.admin{

background:white;

padding:12px 25px;

border-radius:40px;

display:flex;

align-items:center;

box-shadow:0 5px 20px rgba(0,0,0,.15);

}

.admin i{

font-size:35px;

color:#1565c0;

margin-right:12px;

}

.admin h5{

margin:0;

font-weight:bold;

color:#0d47a1;

}

.admin small{

color:#777;

}

/*********************
CARTES
*********************/

.card{

border:none;

border-radius:18px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

transition:.3s;

}

.card:hover{

transform:translateY(-6px);

}

.btn-primary{

background:#1565c0;

border:none;

}

.btn-primary:hover{

background:#0d47a1;

}

.table{

background:white;

border-radius:15px;

overflow:hidden;

}

.table thead{

background:#0d47a1;

color:white;

}

footer{

margin-top:40px;

text-align:center;

color:#666;

}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">

<i class="fas fa-store"></i>

<h2>BOUTIQUE.ALI</h2>

<p>Sales Management System</p>

</div>

<a href="/dashboard">
<i class="fas fa-chart-line"></i>
Dashboard
</a>

<a href="/clients">
<i class="fas fa-users"></i>
Clients
</a>

<a href="/produits">
<i class="fas fa-box-open"></i>
Produits
</a>

<a href="/commandes">
<i class="fas fa-cart-shopping"></i>
Commandes
</a>

<a href="/facture">
<i class="fas fa-file-invoice"></i>
Factures
</a>

</div>

<div class="main">

<div class="topbar">

<div>

<h2>

<i class="fas fa-shop me-2"></i>

Bienvenue chez

<span>BOUTIQUE.ALI</span>

</h2>

<p>

Système professionnel de gestion des Clients, Produits, Commandes et Factures.

</p>

</div>

<div class="admin">

<i class="fas fa-user-circle"></i>

<div>

<h5>Administrateur</h5>

<small>Connecté au système</small>

</div>

</div>

</div>

@yield('content')

<footer>

© 2026 BOUTIQUE.ALI | Tous droits réservés.

</footer>

</div>

</body>

</html>