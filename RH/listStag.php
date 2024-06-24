<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styl.css">
<Title>Gestion des stagiaire</Title>
</head>
<body>
	

	<div class="container">
		<table>
			<tr id="items">
				<th>Numéro</th>
				<th>Nom du stagiaire</th>
                <th> le numéro du téléphone</th>
                <th> Service chargé</th>
                <th> Date début du stage</th>
                <th> Date fin du stage</th>
                <th> Catégorie</th>
                <th> Modification</th>
                <th> Suppression</th>



			</tr>
			<?php
$_SERVER='localhost';
//$utlisateur='root';
$motdepasse='';
$base='gestion_stage';
$connection=mysqli_connect('localhost','root','','gestion_stage');
$select="SELECT *FROM  stagiaire";
$Affichage=$connection->query($select);
$etu=mysqli_num_rows($Affichage);
while($rows=mysqli_fetch_assoc($Affichage)){
$id=$rows['id_stag'];
$numero=$rows['nom_stag'];
$ma=$rows['tel_stag'];
$a=$rows['service_stag'];
$b=$rows['date_debut'];
$c=$rows['date_fin'];
$d=$rows['categorie'];
echo "<tr>";
echo "<th>".$id."</th>";
echo "<th>".$numero."</th>";
echo "<th> ".$ma." </th>";
echo "<th>".$a."</th>";
echo "<th>".$b."</th>";
echo "<th>".$c."</th>";
echo "<th>".$d."</th>";
echo "
<th><a href='./modifier.php?id=".$id."'>Modifier</a></th>
<th><a href='./supprimer.php?id=".$id."'>Supprimer</a></th>


";

   
     }
     echo "
     <tr>
     <th>		<a href='./' class='back_btn'> Retour</a></th>";

?>
		

   
   
  
      










			
		</table>
	</div>
</body>