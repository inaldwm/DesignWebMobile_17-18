<?php

$nom=$_POST['Nom'];
$prenom=$_POST['Prenom'];
$telephone=$_POST['Telephone'];
$mail=$_POST['Mail'];
//connexion a la base de donnée
$connect=mysqli_connect("localhost","root","") or die("Erreur de connexion a la BDD");
mysqli_select_db($connect, "annuaire") or die("Erreur de connexion a la table");

$sql1="INSERT INTO repertoire VALUES ('$nom', '$prenom', '$telephone', '$mail')";
$resultat1=mysqli_query($connect,$sql1);
if ($resultat1)
{
	echo " requête ok ";
}
else
{
	echo " requête défaillante ";
}
mysqli_close($connect);
?>