<?php
$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
$con=mysqli_connect('localhost','root','','gestion_stage');
$id = $_GET['id'];
$req=mysqli_query($con,"SELECT * FROM stagiaire WHERE id_stag =$id");
$row=mysqli_fetch_assoc($req);

if (isset($_POST['modifier'])) {
	echo "ok";
$no=$_POST['noms'];
$a=$_POST['telephone'];
$ser=$_POST['services'];
$da=$_POST['dated'];
$dat=$_POST['dates'];
$ca=$_POST['categorie'];
$req=mysqli_query($con,"UPDATE stagiaire SET 
	nom_stag='$no',
	tel_stag='$a',
	service_stag='$ser',
	date_debut='$da',
	date_fin='$dat',
	categorie='$ca'
	WHERE id_stag =$id");
if($req){
	header("Location:./table-02");

}
else{
	echo "erreur";
}

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<div class="form">
		<a href="./table-02" class="back_btn"> Retour</a>
		<h2>Modifier un Stagiaire</h2>
		?>
		
		<form  method="POST">
			<label>Nom</label>
			<input type="text" name="noms" value="<?=$row['nom_stag']?>">
			<label>Numero du telephone</label>
			<input type="text" name="telephone" value="<?=$row['tel_stag']?>">
			<label>Service</label>
			<input type="text" name="services" value="<?=$row['service_stag']?>">
			<label>Date début</label>
			<input type="date" name="dated" value="<?=$row['date_debut']?>">
			<label>Date fin</label>
			<input type="date" name="dates" value="<?=$row['date_fin']?>">
			<label>Catégorie</label>
			<input type="text" name="categorie" value="<?=$row['categorie']?>">
			<input type="submit" value="Modifier" name="modifier">
	
		</form>
	</div>
</body>
