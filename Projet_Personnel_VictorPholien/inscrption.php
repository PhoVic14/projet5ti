<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>2èmeVie</title>
</head>
<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Acceuil</a></li>
            <li  class="menu"><a href="profil.php">Inscription</a></li>
            <li  class="menu"><a href="connexion.php">Connexion</a></li>
        </ul>
    </header>
    <main>
        <h1>Objet en vente</h1>
        <div class="containeur">
    <form action="" method="">
        <fieldset class="color">
            <legend>Coordonées</legend>
            <div>
                <label for="nom"> Entrez votre nom : </label>
                <input name="nom" type="text" id="nom" placeholder="Votre nom" required>
            </div>
            <div>
                <label for="prenom"> Entrez votre prenom : </label>
                <input name="prenom" type="text" id="prenom" placeholder="Votre prénom" required >
            </div>
            <div>
                <label for="naissance"> Date de naissance : </label>
                <input name="naissance" type="date" id="naissance" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input name="email" type="email" id="email" placeholder="Votre email" required>
            </div>
            <div>
                <label for="mdp">Mot de passe :</label>
                <input name="mdp" type="text" id="mdp" placeholder="Votre mot de passe" required>
            </div>