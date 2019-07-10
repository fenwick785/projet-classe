<?php try {
    $bdd = new PDO('mysql:host=localhost;dbname=developpeurs;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Appel des noms

$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 1");
($dev1 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 2");
($dev2 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 3");
($dev3 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 4");
($dev4 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 5");
($dev5 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 6");
($dev6 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 7");
($dev7 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 8");
($dev7 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 9");
($dev9 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 10");
($dev10 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 11");
($dev11 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 12");
($dev12 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 13");
($dev13 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 14");
($dev14 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 15");
($dev15 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 16");
($dev16 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 17");
($dev17 = $reponse->fetch());
$reponse = $bdd->query("SELECT * FROM etudiants WHERE id_contact = 18");
($dev18 = $reponse->fetch());

$reponse->closeCursor();