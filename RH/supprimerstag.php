<?php
 $_SERVER="localhost";
//$utilisateur="root";

$con=mysqli_connect('localhost','root','','gestion_stage');
$id=$_GET['id'];


if (isset($_POST['confirme'])){

$sup=mysqli_query($con,"DELETE FROM stage WHERE id_stage=$id");
header("Location:../Home/index3.php");
 
} elseif(isset($_POST['laisse'])){
	header("Location:../Home/index3.php");
 }


 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="">
<Title></Title>
</head>
<body>
	<h2> Etes vous sure de supprimer ces données?</h2>
	<form method="POST">
	<input type="submit" value="confirmer" name="confirme">
	<input type="submit" value="Annuler" name="laisse">
</form>
