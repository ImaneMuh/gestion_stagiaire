
<?php

$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="mirane";
//$i=$_POST['id'];
$n=$_POST['nom'];
$ca=$_POST['categorie'];
$ser=$_POST['service'];
$d=$_POST['dated'];
$da=$_POST['dates'];
$con=mysqli_connect('localhost','root','','mirane');
$sql="INSERT INTO  stagiaire
 values(NULL,'$n','$ca','$ser','$d','$da')";

$resultat=mysqli_query($con,$sql);

echo $resultat;

if($resultat){
    header("location: index1.php");

}else{
    echo 'erreur';
}


 ?>
 <a href="index1.php" class="back_btn"> Retour</a>