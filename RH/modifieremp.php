<?php
$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
$con=mysqli_connect('localhost','root','','gestion_stage');
$id = $_GET['id'];
$req=mysqli_query($con,"SELECT * FROM employe WHERE id_emp =$id");
$row=mysqli_fetch_assoc($req);

if (isset($_POST['modifier'])) {
   $no=$_POST['nom'];
   $ser=$_POST['telephone'];
   $da=$_POST['service'];
   $req=mysqli_query($con,"UPDATE employe SET 
	  nom_emp='$no',
	  tel_emp='$ser',
	  service_emp='$da'
	  WHERE id_emp ='$id'");
      if($req){
	     header("Location:./listEmp.php");
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
		<a href="./" class="back_btn"> Retour</a>
		<h2>Modifier les informations d'un Employé</h2>
		?>
		
		<form  method="POST">
			<label>votre Nom</label>
			<input type="text" name="nom" value="<?=$row['nom_emp']?>">
			<label>votre numéro du téléphone</label>
			<input type="number" name="telephone" value="<?=$row['tel_emp']?>">
			<label>Votre Service</label>
			<input type="text" name="service" value="<?=$row['service_emp']?>">
			<input type="submit" value="Modifier" name="modifier">
		</form>
	</div>
</body>
