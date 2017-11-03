<?php
// Connexion a la base de données
$connect=mysqli_connect("localhost","root","") or die("Erreur de connexion a la BDD");
mysqli_select_db($connect, "annuaire") or die("Erreur de connexion a la table");

// création des requetes
$sql="SELECT*FROM repertoire";
echo "<html><body><div align=\"center\">" ;
echo "<h1>Liste des personnes</h1><br><br><br>" ;
// envoie de la requête et retour
$resultat=mysqli_query($connect,$sql);

if($resultat)
{
	while($table_ligne=mysqli_fetch_array($resultat))
		{
		echo "<table border=0 cellspacing=2 cellpadding=1>";
		echo "<tr>";
		echo "<th>";
		echo $table_ligne['Nom'];
		echo "</th>";
		echo "<th>";
		echo $table_ligne['Prenom'];
		echo "</th>";
		echo "<th>";
		echo $table_ligne['Telephone'];
		echo "</th>";
		echo "<th>";
		echo $table_ligne['Mail'];
		echo "</th>";
		echo "</tr>";
		echo "</table>";
		}
}
mysqli_close($connect);
?>	