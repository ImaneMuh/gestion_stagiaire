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
				             <th>Nom de l'employe</th>
                             <th> Téléphone</th>
                             <th> Service chargé</th>
							 <th> L'émail</th>
							 <th> Le Genre</th>
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
$select="SELECT *FROM  employe";
$Affichage=$connection->query($select);
$etu=mysqli_num_rows($Affichage);
while($rows=mysqli_fetch_assoc($Affichage)){
$id=$rows['id_emp'];
$numero=$rows['nom_emp'];
$ma=$rows['tel_emp'];
$co=$rows['service_emp'];
$a=$rows['email_emp'];
$b=$rows['genre'];
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$numero."</td>";
echo "<td> ".$ma." </td>";
echo "<td>".$co."</td>";
echo "<td>".$a."</td>";
echo "<td>".$b."</td>";
echo "
<td><a href='../modifieremp.php?id=".$id."'>Modifier</a></td>
<td><a href='../supprimeremp.php?id=".$id."'>Supprimer</a></td>


";

   
     }
     echo "
     <tr>
     <td>		<a href='../' class='back_btn'> Retour</a></td>";

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

