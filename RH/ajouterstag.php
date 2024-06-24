
<?php

$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
//$i=$_POST['id'];
$n=$_POST['dure'];
$ca=$_POST['dept'];
$ser=$_POST['type'];
$d=$_POST['encadre'];
$con=mysqli_connect('localhost','root','','gestion_stage');
$sql="INSERT INTO  stage
 values(NULL,'$n','$ca','$ser','$d')";

$resultat=mysqli_query($con,$sql);

echo $resultat;

if($resultat){
    header("location: ../Home/index3.php");

}else{
    echo 'erreur';
}


 ?>
 <a href="../Home/index3.php" class="back_btn"> Retour</a>