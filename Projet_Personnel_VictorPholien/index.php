<?php
    require_once "dbConnection.php";

    $sth = $dbh->prepare("select * from users" );
    $sth->execute();
    print("Les users:\n");
    $result = $sth->fetchAll();
    print_r($result);
?>
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