<?php
$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
$con=mysqli_connect('localhost','root','','gestion_stage');
$id = $_GET['id'];
$req=mysqli_query($con,"SELECT t.cod, t.description, t.date_confie, t.date_voulu, t.id_stag, t.id_emp, t.departement FROM  stagiaire s, tache t, employe e WHERE t.id_stag= s.id_stag AND t.id_emp = e.id_emp AND t.cod='$id'");
$row=mysqli_fetch_assoc($req);

if (isset($_POST['modifier'])) {
   $a=$_POST['desc'];
   $b=$_POST['datec'];
   $c=$_POST['datev'];
   $d=$_POST['stage'];
   $e=$_POST['encadre'];
   $f=$_POST['dept'];
   $req=mysqli_query($con,"UPDATE tache SET 
	  description='$a',
	  date_confie='$b',
	  date_voulu='$c',
      id_stag='$d',
      id_emp='$e',
      departement='$f'
	  WHERE cod ='$id'");
      if($req){
	     header("Location:./listTach.php");
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
		<h2>Modifier les informations d'une tache</h2>
		?>
		
		<form  method="POST">
			<label>La description</label>
			<input type="text" name="desc" value="<?=$row['description']?>">
			<label>Date confie</label>
			<input type="date" name="datec" value="<?=$row['date_confie']?>">
			<label>Date voulu </label>
			<input type="date" name="datev" value="<?=$row['date_voulu']?>">
            <label>Le stagiaire confié</label>
			<input type="text" name="stage" value="<?=$row['id_stag']?>">
            <label>L'encadreur</label>
			<input type="text" name="encadre" value="<?=$row['id_emp']?>">
            <label>Département</label>
			<input type="text" name="dept" value="<?=$row['departement']?>">
			<input type="submit" value="Modifier" name="modifier">
		</form>
	</div>
</body>
