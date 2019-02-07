<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>Utilisateurs</h2>
<?php

//connection à la bdd
$bdd = new PDO("mysql:host=localhost;dbname=gestion_parc;port=3307","root","");//$bdd de type PDO

//requete à executer
$sql = "SELECT * FROM utilisateur";
//execution de la requete (appel de la methode query sur l'objet $)

$stmt=$bdd->query($sql);

//liste des utilisateur
$liste_utilisateurs = $stmt->fetchALL(PDO::FETCH_ASSOC);

//affichage des données
//affichage des données
foreach($liste_utilisateurs as $utilisateur){
    ?>
    <!--Lien vers la page de détail de l'utilisateur-->
    <a href="utilisateur.php?id=<?= $utilisateur["id_utlisateur"] ?>">
            <?= $utilisateur["prenom_utilisateur"]." ".$utilisateur["nom_utilisateur"] ?>
        </a>
        <br>
    <?php
    }
    
    //destruction de l'objet de connexion (libération de la mémoire)
    $bdd = null;
    
    ?>
    </body>
    </html>
//var_dump($liste_utilisateurs);

//destruction de l'objet de connection (libération de la memoire)
//$bdd = null;
?>