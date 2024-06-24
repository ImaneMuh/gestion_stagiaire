<?php
session_start();

if(empty($_SESSION['id_emp'])){
	$message= "veuillez-vous connecter pour vous rendre dans l espace employe";
	header("location:../connexion.php?rhAuth='.$message.'");

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
             <li><a href="ajoutertache.html"> Ajouter des taches</a></li>
		     <li><a href="#"> Consulter les profils</a></li>
             <li><a href="#"> Rechercher</a></li>
		      <ul class="sous">
			      <li><a href="rechercherta.php"> Rechercher les taches</a></li>
                  <li><a href="rechercher.php"> Rechercher des stagiaires</a></li>
              </ul>  
		      
		  <li><a href="deconnexion.php"> Deconnexion</a></li>



        </ul>

     </div>
	 <div class="main-head">
		<table >
			<tr>
			<td colspan="4"> <a href="listTach.php"> Liste des taches</a></td>

			</tr>

	
