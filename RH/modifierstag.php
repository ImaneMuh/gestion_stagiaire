<?php
$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
$con=mysqli_connect('localhost','root','','gestion_stage');
$id = $_GET['id'];
$req=mysqli_query($con,"SELECT s.id_stage,s.duree,s.departement,s.type,e.nom_emp FROM  stage s, employe e WHERE s.id_emp=e.id_emp AND s.id_stage =$id");
$row=mysqli_fetch_assoc($req);

if (isset($_POST['modifier'])) {
	echo "ok";
$no=$_POST['dure'];
$ca=$_POST['dept'];
$ser=$_POST['type'];
$da=$_POST['encadre'];
$req=mysqli_query($con,"UPDATE stage,employe SET 
	stage.duree='$no',
	stage.departement='$ca',
	stage.type='$ser',
	stage.id_emp='$da',
	WHERE stage.id_emp=employe.id_emp AND stage.id_stage =$id");
if($req){
	header("Location:../Home/index3.php");

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
	<link rel="stylesheet" type="text/css" href="../Home/styl.css">
</head>
<body>
	<div class="form">
		<a href="../Home/index3.php" class="back_btn"> Retour</a>
		<h2>Modifier les information du stage</h2>
		?>
		
		<form  method="POST">
			<label>Durée voulu</label>
			<input type="text" name="dure" value="<?=$row['duree']?>">
			<label>Département à échangé</label>
			<input type="text" name="dept" value="<?=$row['departement']?>">
			<label>Type</label>
			<input type="text" name="type" value="<?=$row['type']?>">
			<label>Le nouveau encadreur(trice)</label>
			<input type="text" name="encadre" value="<?=$row['nom_emp']?>">
			<input type="submit" value="Modifier" name="modifier">
		</form>
	</div>
</body>
