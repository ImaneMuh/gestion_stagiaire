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
				<th>Déscription du taches</th>
                <th> Date confie</th>
                <th> Date voulu</th>
                <th> le stagiaire à effectuer</th>
                <th> l'encadreur</th>
                <th> Département</th>




			</tr>
			<?php
$_SERVER='localhost';
//$utlisateur='root';
$motdepasse='';
$base='gestion_stage';
$connection=mysqli_connect('localhost','root','','gestion_stage');
$select="SELECT t.cod, t.description, t.date_confie, t.date_voulu, s.nom_stag, e.nom_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp";
$Affichage=$connection->query($select);
$etu=mysqli_num_rows($Affichage);
while($rows=mysqli_fetch_assoc($Affichage)){
$id=$rows['cod'];
$numero=$rows['description'];
$ma=$rows['date_confie'];
$a=$rows['date_voulu'];
$b=$rows['nom_stag'];
$c=$rows['nom_emp'];
$d=$rows['departement'];
echo "<tr>";
echo "<th>".$id."</th>";
echo "<th>".$numero."</th>";
echo "<th> ".$ma." </th>";
echo "<th>".$a."</th>";
echo "<th>".$b."</th>";
echo "<th>".$c."</th>";
echo "<th>".$d."</th>";

   
     }
     echo "
     <tr>
     <th>		<a href='./' class='back_btn'> Retour</a></th>";

?>
		

   
   
  
      










			
		</table>
	</div>
</body>