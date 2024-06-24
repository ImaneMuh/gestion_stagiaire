<?php
session_start();

if(empty($_SESSION['id_stag'])){
	$message= "veuillez-vous connecter pour vous rendre dans l espace stagiaire";
	header("location:../connexion.php?rhAuth=.$message");

}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
<Title>Gestion des stagiaire</Title>
</head>
<body>
<nav>
<div class="main-head">
      
          <li><a href="#"> Menu</a></li>
		   <ul>
             <li><a href="#"> Modifier l'état des taches</a></li>
		     <li><a href="#"> Consulter son profil</a></li>
             <li><a href="#"> Rechercher les taches</a></li>

			</ul>
		  <li><a href="deconnexion.php"> Deconnexion</a></li>



      

     </div>
	 <div class="main-head">
		<table >
			<tr>
			<td colspan="4"> <a href="#"> Liste des taches</a></td>
			</tr>

	
