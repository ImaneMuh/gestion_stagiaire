<?php
$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
$con=mysqli_connect('localhost','root','','gestion_stage');
$id = $_POST['id'];
$req=mysqli_query($con,"SELECT * FROM employe WHERE id_emp =$id");
$row=mysqli_fetch_assoc($req);

if (isset($_POST['modifier'])) {
	
$no=$_POST['nom'];
$ca=$_POST['email'];
$ser=$_POST['telephone'];
$da=$_POST['service'];

$req=mysqli_query($con,"UPDATE employe SET 
	nom_emp='$no',
	email_emp='$ca',
	tel_emp='$ser',
	service_emp='$da',
	WHERE id_emp =$id");
if($req){
	header("Location:./");

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
		<h2></h2>
		
		<form action=" " method="POST">
            <label>numero</label>
			<input type="text" name="id">
			<label>Nom</label>
			<input type="text" name="nom" value="<?=$row['nom_emp']?>">
			<label>telephone</label>
			<input type="text" name="telephone" value="<?=$row['tel_emp']?> ">
			<label>Service</label>
			<input type="text" name="service"  value="<?=$row['service_emp']?>">
		 
			<input type="submit" value="Modifier" name="button">
		</form>
	</div>
</body>