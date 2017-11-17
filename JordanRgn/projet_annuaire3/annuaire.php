<?php

// Connexion a la base de données
$connect=mysqli_connect("localhost","root","") or die("Erreur de connexion a la BDD");
mysqli_select_db($connect, "annuaire") or die("Erreur de connexion a la table");
?>


<?php

if (isset($_POST['save']))
{
	$nom=$_POST['Nom'];
	$prenom=$_POST['Prenom'];
	$telephone=$_POST['Telephone'];
	$mail=$_POST['Mail'];
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
}
?>

<?php
// création des requetes
$sql="SELECT*FROM repertoire";
echo "<html><body><div align=\"center\">" ;
echo "<h1>Liste des personnes</h1><br><br><br>" ;

// envoie de la requête et retour
$resultat=mysqli_query($connect,$sql);
if($resultat)
{
	echo "<table align='center' border=1 cellspacing=3 cellpadding=0>";
	while($table_ligne=mysqli_fetch_array($resultat))
		{
		echo "<tr>";
		echo "<td>";
		echo $table_ligne['Nom'];
		echo "</td>";
		echo "<td>";
		echo $table_ligne['Prenom'];
		echo "</td>";
		echo "<td>";
		echo $table_ligne['Telephone'];
		echo "</td>";
		echo "<td>";
		echo $table_ligne['Mail'];
		echo "</td>";
		echo "</tr>";
		}
		echo "</table>";
}
mysqli_close($connect);
?>	


<form action="" method="post">
<br><br>
Ajouter une nouvelle personne :
<br><br>
Nom :
<input type="texte" name="Nom">
<br><br>
Pr&eacutenom :
<input type="texte" name="Prenom">
<br><br>
T&eacutel&eacutephone :
<input type="texte" name="Telephone">
<br><br>
Mail :
<input type="texte" name="Mail">
<br><br>
<input type="submit" name="save" value="Ajouter">
</form>