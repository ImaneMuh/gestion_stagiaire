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
		$req=mysqli_query($con,"SELECT * FROM employe WHERE nom_emp LIKE '$tableauLettre[0]%' ");
		
	}
	elseif ($compteur==2) {
		$req=mysqli_query($con,"SELECT * FROM employe WHERE 
			nom_emp LIKE '$tableauLettre[0]%' AND
			nom_emp LIKE '%$tableauLettre[1]%' ");


   
     }elseif ($compteur==3){
		echo "ici >3";
        $req=mysqli_query($con,"SELECT * FROM employe WHERE 
			nom_emp LIKE '$tableauLettre[0]%' AND
			nom_emp LIKE '%$tableauLettre[1]%' AND 
			nom_emp LIKE '%$tableauLettre[2]%' ");

	}elseif ($compteur==4){
        $req=mysqli_query($con,"SELECT * FROM employe WHERE 
			nom_emp LIKE '$tableauLettre[0]%' AND
			nom_emp LIKE '%$tableauLettre[1]%' AND 
			nom_emp LIKE '%$tableauLettre[2]%' AND
			nom_emp LIKE '%$tableauLettre[3]%'");

	}else{
     $req=mysqli_query($con,"SELECT * FROM employe WHERE nom_emp LIKE '$tableauLettre[0]%' ");
	}




echo "<table border='1'>
			<tr>
				<th>Numéro</th>
				<th>Nom de l'employé</th>
                <th> Consultation</th>
            
			</tr>";
while($rows=mysqli_fetch_assoc($req)){
$id=$rows['id_emp'];
$numero=$rows['nom_emp'];

echo "<tr>";
echo "<th>".$id."</th>";
echo "<th>".$numero."</th>";
echo "
<th><a href='./consulte.php?id=".$id."'>Consulter son profil</a></th>


";
}
echo "
<tr>
<th colspan='6' ><center>		<a href='./' class='back_btn'> Retour</a></th>";

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