<?php
 $_SERVER="localhost";
//$utilisateur="root";

$con=mysqli_connect('localhost','root','','gestion_stage');
if(isset($_GET['recherche'])){
if (!empty($_GET['nom'])) {
	$tableauLettre=str_split($_GET['nom'] );
	$compteur= count($tableauLettre);
	/*echo $compteur;
	var_dump($tableauLettre) ;
	*/
	$req =null;

	if ($compteur==1) {
		$req=mysqli_query($con,"SELECT t.cod, t.description, t.date_confie, t.date_voulu, s.nom_stag, e.nom_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp AND t.description LIKE '$tableauLettre[0]%' ");
		
	}
	elseif ($compteur==2) {
		$req=mysqli_query($con,"SELECT t.cod, t.description, t.date_confie, t.date_voulu, s.nom_stag, e.nom_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp AND t.description LIKE '$tableauLettre[0]%'  AND
			t.description LIKE '%$tableauLettre[1]%' ");


   
     }elseif ($compteur==3){
		echo "ici >3";
        $req=mysqli_query($con,"SELECT t.cod, t.description, t.date_confie, t.date_voulu, s.nom_stag, e.nom_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp AND t.description LIKE '$tableauLettre[0]%'  AND
        t.description LIKE '%$tableauLettre[1]%' AND 
        t.description LIKE '%$tableauLettre[2]%' ");

	}elseif ($compteur==4){
        $req=mysqli_query($con,"SELECT t.cod, t.description, t.date_confie, t.date_voulu, s.nom_stag, e.nom_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp AND t.description LIKE '$tableauLettre[0]%'  AND
        t.description LIKE '%$tableauLettre[1]%' AND 
        t.description LIKE '%$tableauLettre[2]%' AND
        t.description LIKE '%$tableauLettre[3]%'");

	}else{
     $req=mysqli_query($con,"SELECT t.cod, t.description, t.date_confie, t.date_voulu, s.nom_stag, e.nom_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp AND t.description LIKE '$tableauLettre[0]%' ");
	}




echo "<table border='1'>
			<tr>
				<th>Numéro</th>
				<th>La déscription</th>
                <th> Date confie</th>
                <th> Date voulu</th>
                <th> le stagiaire</th>
                <th> L'encadreur</th>
                <th> Le Département</th>
                <th> Modification</th>
                <th> Suppression</th>
			</tr>";
while($rows=mysqli_fetch_assoc($req)){
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
echo "<th> ".$a." </th>";
echo "<th> ".$b." </th>";
echo "<th> ".$c." </th>";
echo "<th>".$d."</th>
<th><a href='./modifiertache.php?id=".$id."'>Modifier</a></th>
<th><a href='./supprimertache.php?id=".$id."'>Supprimer</a></th>


";
}
echo "
<tr>
<th colspan='8' ><center>		<a href='./' class='back_btn'> Retour</a></th>";

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

		<input type="text" name="nom" placeholder="recherche par nom.."></td>
		<input type="submit" value="rechercher" name="recherche">
</form>


</body>
</html>