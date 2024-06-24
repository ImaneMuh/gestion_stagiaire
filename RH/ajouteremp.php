<?php

$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
//$i=$_POST['id'];
$n=$_POST['nom'];
$ser=$_POST['telephone'];
$d=$_POST['service'];
$b=$_POST['email'];
$c=$_POST['genre'];
$con=mysqli_connect('localhost','root','','gestion_stage');
$sql="INSERT INTO  employe
 values(NULL,'$n','$ser','$d','$b','$c')";

$resultat=mysqli_query($con,$sql);

echo $resultat;

if($resultat){
    header("Location:./register.php");

}else{
    echo 'erreur';
}


 ?>
 <a href="Location: ./index.php" class="back_btn"> Retour</a>