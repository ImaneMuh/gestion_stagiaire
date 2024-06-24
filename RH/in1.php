<?php
session_start();

if(empty($_SESSION['id_rh'])){
	$message= "veuillez-vous connecter pour vous rendre dans l espace RH";
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
       <ul>
          <li><a href="#"> Menu</a></li>
          <li><a href="#"> Ajouter</a></li>
		     <ul class="sous">
			   <li><a href="ajouteremp.html"> Ajouter un employé</a></li>
			   <li><a href="ajouter.html"> Ajouter un stagiaire</a></li>
             </ul>
          <li><a href="#"> Supprimer</a></li>
		      <ul class="sous">
			   <li><a href="listEmp.php"> Supprimer un employé</a></li>
			   <li><a href="listStag.php"> Supprimer un stagiaire</a></li>
              </ul>
		  <li><a href="#"> Consulter les profils</a></li>
          <li><a href="#"> Rechercher</a></li>
		      <ul class="sous">
			      <li><a href="rechercheremp.php"> Rechercher un employé</a></li>
                  <li><a href="rechercher.php"> Rechercher un stagiaire</a></li>
              </ul>  
		      
		  <li><a href="deconnexion.php"> Deconnexion</a></li>



        </ul>

     </div>
	 <div class="main-head">
		<table >
			<tr>
				<td colspan="4"> <a href="listStag.php"> Liste des stagiaires</a></td>
				<td colspan="4"> <a href="listEmp.php"> Liste des employés</a></td>
            </tr>
			<tr>
			<td colspan="4"> <a href="listTach.php"> Liste des taches</a></td>
			</tr>

	
