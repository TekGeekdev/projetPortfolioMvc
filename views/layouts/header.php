<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="{{asset}}/css/import.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="nav-top" class="full-bleed">
            <h1>Portfolio</h1>
            <ul>
                <li><a href="{{base}}/">Acceuil</a></li>
                <li><a href="no-page">Á propos</a></li>
                <li><a href="no-page">Projets</a></li>
                <li><a href="no-page">Billet d'humeur</a></li>
                <li><a href="no-page">Contact</a></li>
            </ul>
            <ul>
                <li><a href="{{base}}/utilisateur/create">Création compte</a></li>
                <li><a href="{{base}}/utilisateur/show?id={{utilisateur.id}}">Compte</a></li>
            </ul>
        </nav>
