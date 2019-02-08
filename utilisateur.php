<a  href="test.php">retour a la liste des utilisateurs</a>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=gestion_parc;port=3307","root","");//$bdd de type PDO
$sql = "SELECT * from utilisateur where id_utlisateur=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_GET['id']]);
$utilisateur = $stmt->fetch(pdo::FETCH_ASSOC);

?>
<h2><?=$utilisateur["prenom_utilisateur"]." ".$utilisateur["nom_utilisateur"] ?></h2>
