<?php
session_start();
require('connection.php');
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adress= $_POST['adress'];
echo "Votre nom est:".$nom."<br>Votre prenom est :".$prenom."<br>Votre adress est:".$adresse."<br>;
$insert= $db->prepare("INSERT INTO School(nom, prenom, adresse) VALUES(?,?,?)");
$insert->execute(array($nom,$prenom,$adresse));

 header('Location:accueil.php');

?> 
