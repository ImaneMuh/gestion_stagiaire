<?php

$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
//$i=$_POST['id'];
$a=$_POST['desc'];
$b=$_POST['datec'];
$c=$_POST['datev'];
$d=$_POST['stage'];
$e=$_POST['encadre'];
$f=$_POST['dept'];
$con=mysqli_connect('localhost','root','','gestion_stage');
$sql="INSERT INTO  tache
 values(NULL,'$a','$b','$c','$d','$e','$f')";

$resultat=mysqli_query($con,$sql);

echo $resultat;

if($resultat){
    header("Location:./listTach.php");

}else{
    echo 'erreur';
}


 ?>
 <a href="Location: ./listTach.php" class="back_btn"> Retour</a>