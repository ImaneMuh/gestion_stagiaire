
<?php

$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
//$i=$_POST['id'];
$n=$_POST['nom'];
$ca=$_POST['telephone'];
$ser=$_POST['service'];
$d=$_POST['dated'];
$da=$_POST['datef'];
$ma=$_POST['categorie'];
$a=$_POST['email'];
$b=$_POST['genre'];
$con=mysqli_connect('localhost','root','','gestion_stage');
$sql="INSERT INTO  stagiaire
 values(NULL,'$n','$ca','$ser','$d','$da','$ma','$a','$b')";

$resultat=mysqli_query($con,$sql);

echo $resultat;

if($resultat){
    header("location: ./index.php");

}else{
    echo 'erreur';
}


 ?>
 <a href="./" class="back_btn"> Retour</a>