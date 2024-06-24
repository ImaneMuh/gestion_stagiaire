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
				<th>Nom de l'employe</th>
                <th> le numéro du téléphone</th>
                <th> Service chargé</th>
                <th> Modification</th>
                <th> Suppression</th>



			</tr>
			<?php
$_SERVER='localhost';
//$utlisateur='root';
$motdepasse='';
$base='gestion_stage';
$connection=mysqli_connect('localhost','root','','gestion_stage');
$select="SELECT *FROM  employe";
$Affichage=$connection->query($select);
$etu=mysqli_num_rows($Affichage);
while($rows=mysqli_fetch_assoc($Affichage)){
$id=$rows['id_emp'];
$numero=$rows['nom_emp'];
$ma=$rows['tel_emp'];
$co=$rows['service_emp'];
echo "<tr>";
echo "<th>".$id."</th>";
echo "<th>".$numero."</th>";
echo "<th> ".$ma." </th>";
echo "<th>".$co."</th>";
echo "
<th><a href='./modifieremp.php?id=".$id."'>Modifier</a></th>
<th><a href='./supprimeremp.php?id=".$id."'>Supprimer</a></th>


";

   
     }
     echo "
     <tr>
     <th>		<a href='./' class='back_btn'> Retour</a></th>";

?>
		

   
   
  
      










			
		</table>
	</div>
</body>