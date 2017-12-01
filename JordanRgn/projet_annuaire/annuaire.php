<html>
<head>
<title>Annuaire</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

// Connexion a la base de données
$connect=mysqli_connect("localhost","root","") or die("Erreur de connexion a la BDD");
mysqli_select_db($connect, "annuaire") or die("Erreur de connexion a la table");
?>


<?php

if (isset($_POST['save']))
{
	$id=$_POST['Id'];
	$nom=$_POST['Nom'];
	$prenom=$_POST['Prenom'];
	$telephone=$_POST['Telephone'];
	$mail=$_POST['Mail'];
	$sql1="INSERT INTO repertoire VALUES ('$id','$nom', '$prenom', '$telephone', '$mail')";
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
$sql="SELECT Id, Nom, Prenom, Telephone, Mail FROM repertoire";
echo "<div align=\"center\">" ;
echo "<h1>Liste des personnes</h1><br><br><br>" ;

// envoie de la requête et retour
$resultat=mysqli_query($connect,$sql);
if($resultat)
{
	echo "<table align='center' border=1 cellspacing=3 cellpadding=0>";
	while($table_ligne=mysqli_fetch_array($resultat))
		{
		echo "<tr>";
		/*echo "<td>",$table_ligne['Id'],"</td>";*/
		echo "<td>",$table_ligne['Nom'],"</td>";
		echo "<td>",$table_ligne['Prenom'],"</td>";
		echo "<td>",$table_ligne['Telephone'],"</td>";
		echo "<td>",$table_ligne['Mail'],"</td>";
		echo "<td>",'<input type="button" value="Modifier" href="lien"/>',"</td>";
		echo "<td>",'<input type="button" value="Supprimer" href="lien"/>',"</td>";
		echo "</tr>";
		}
		echo "</table>";
}
mysqli_close($connect);
?>

<form action="" method="post">
<br><br>
Ajouter une nouvelle personne :
<!--<br><br>
Id :
<input type="texte" name="Id">-->
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
</body>
</html>