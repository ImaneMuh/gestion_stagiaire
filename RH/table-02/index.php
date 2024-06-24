<!doctype html>
<html lang="en">
  <head>
  	<title>la liste</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Les listes des Employés</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
							 <th>Numéro</th>
				             <th>Nom du stagiaire</th>
                             <th>téléphone</th>
                             <th> Service chargé</th>
                             <th> Date début du stage</th>
                             <th> Date fin du stage</th>
                             <th> Catégorie</th>
							 <th> Genre</th>
                             <th> Modification</th>
                              <th> Suppression</th>

						    </tr>
						  </thead>
						  <tbody>
						  <?php
$_SERVER='localhost';
//$utlisateur='root';
$motdepasse='';
$base='gestion_stage';
$connection=mysqli_connect('localhost','root','','gestion_stage');
$select="SELECT *FROM  stagiaire";
$Affichage=$connection->query($select);
$etu=mysqli_num_rows($Affichage);
while($rows=mysqli_fetch_assoc($Affichage)){
$id=$rows['id_stag'];
$numero=$rows['nom_stag'];
$ma=$rows['tel_stag'];
$a=$rows['service_stag'];
$b=$rows['date_debut'];
$c=$rows['date_fin'];
$d=$rows['categorie'];
$e=$rows['genre'];
echo "<tr>";
echo "<th>".$id."</th>";
echo "<th>".$numero."</th>";
echo "<th> ".$ma." </th>";
echo "<th>".$a."</th>";
echo "<th>".$b."</th>";
echo "<th>".$c."</th>";
echo "<th>".$d."</th>";
echo "<th>".$e."</th>";
echo "
<th><a href='../modifier.php?id=".$id."'>Modifier</a></th>
<th><a href='../supprimer.php?id=".$id."'>Supprimer</a></th>


";

   
     }
     echo "
     <tr>
     <th>		<a href='../' class='back_btn'> Retour</a></th>";

?>
	
						  
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

