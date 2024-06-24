<?php
 $_SERVER="localhost";
//$utilisateur="root";

$con=mysqli_connect('localhost','root','','gestion_stage');
if(isset($_GET['recherche'])){
if (!empty($_GET['nom_stag'])) {
	$tableauLettre=str_split($_GET['nom_stag'] );
	$compteur= count($tableauLettre);
	/*echo $compteur;
	var_dump($tableauLettre) ;
	*/
	$req =null;

	if ($compteur==1) {
		$req=mysqli_query($con,"SELECT * FROM stagiaire WHERE nom_stag LIKE '$tableauLettre[0]%' ");
		
	}
	elseif ($compteur==2) {
		$req=mysqli_query($con,"SELECT * FROM stagiaire WHERE 
			nom_stag LIKE '$tableauLettre[0]%' AND
			nom_stag LIKE '%$tableauLettre[1]%' ");


   
     }elseif ($compteur==3){
        $req=mysqli_query($con,"SELECT * FROM stagiaire WHERE 
			nom_stag LIKE '$tableauLettre[0]%' AND
			nom_stag LIKE '%$tableauLettre[1]%' AND 
			nom_stag LIKE '%$tableauLettre[2]%' ");

	}elseif ($compteur==4){
        $req=mysqli_query($con,"SELECT * FROM stagiaire WHERE 
			nom_stag LIKE '$tableauLettre[0]%' AND
			nom_stag LIKE '%$tableauLettre[1]%' AND 
			nom_stag LIKE '%$tableauLettre[2]%' AND
			nom_stag LIKE '%$tableauLettre[3]%'");

	}else{
     $req=mysqli_query($con,"SELECT * FROM stagiaire WHERE nom_stag LIKE '$tableauLettre[0]%' ");
	}




echo "<table border='1'>
			<tr>
				<th>Numéro</th>
				<th>Nom du stagiaire</th>
				<th> Numéro du téléphone</th>
                <th> Service Affecté</th>
                <th> Date du début</th>
                <th> Date du fin</th>
				<th> Catégorie</th>
                <th> Modification</th>
                <th> Suppression</th>
			</tr>";
while($rows=mysqli_fetch_assoc($req)){
$id=$rows['id_stag'];
$numero=$rows['nom_stag'];
$a=$rows['tel_stag'];
$ma=$rows['service_stag'];
$co=$rows['date_debut'];
$dis=$rows['date_fin'];
$ca=$rows['categorie'];
echo "<tr>";
echo "<th>".$id."</th>";
echo "<th>".$numero."</th>";
echo "<th> ".$a." </th>";
echo "<th> ".$ma." </th>";
echo "<th>".$co."</th>";
echo "<th>".$dis."</th>";
echo "<th> ".$ca." </th>
<th><a href='modifier.php?id=".$id."'>Modifier</a></th>
<th><a href='supprimer.php?id=".$id."'>Supprimer</a></th>


";
}
echo "
<tr>
<th colspan='9' ><center>		<a href='./' class='back_btn'> Retour</a></th>";

}}


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="page.css" />
</head>
<body>
<h1>FORMULAIRE DU RECHERCHE</h1>
<form method="GET">

		<input type="text" name="nom_stag" placeholder="recherche par nom_stag.."></td>
		<input type="submit" value="rechercher" name="recherche">
</form>


</body>
</html>