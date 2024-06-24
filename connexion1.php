
<?php
$_SERVER="localhost";
// $utilisateur="root";
$motDePasse="";
$base="gestion_stage";
$con=mysqli_connect('localhost','root','','gestion_stage');
session_start();


if(!empty($_SESSION['id_rh']) ){
  header("location: ./RH");
}
if(!empty($_SESSION['id_emp']) ){
  header("location: ./employe");
}
if(!empty($_SESSION['id_stag']) ){
  header("location: ./stagiaire");
}

$message = "";

if (isset($_POST['envoi'])){
  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($con, $email);
  
  $mdp = stripslashes($_POST['mdp']);
  $mdp = mysqli_real_escape_string($con, $mdp);
  
  $query = "SELECT * FROM user WHERE email_user='$email' and mot_passe= '$mdp'";
  $result= mysqli_query($con,$query);

if($result){
  $row = mysqli_num_rows($result);
  
  if($row==1){
  
    $_SESSION['email_user'] = $email;

    while($user = mysqli_fetch_assoc($result)){
      
       if($user['role'] === 'rh'){
        $_SESSION['id_rh'] = $user['id_user'];
        $_SESSION['em_rh'] = $user['email_user'];
        $_SESSION['mdp_rh'] = $user['mot_passe'];
        $_SESSION['role_rh'] = $user['role'];
        header("location: ./RH");
       }elseif($user['role'] === 'employe'){
        $_SESSION['id_emp'] = $user['id_user'];
        $_SESSION['em_emp'] = $user['email_user'];
        $_SESSION['mdp_emp'] = $user['mot_passe'];
        $_SESSION['role_emp'] = $user['role'];
        header("location: ./employe");
       }elseif($user['role'] === 'stagiaire'){
        $_SESSION['id_stag'] = $user['id_user'];
        $_SESSION['em_stag'] = $user['email_user'];
        $_SESSION['mdp_stag'] = $user['mot_passe'];
        $_SESSION['role_stag'] = $user['role'];
        header("location: ./stagiaire");
       }
       
      } 
      
    }
    }else{
      $message= "votre mail ou votre mot de passe est incorecte";
      
     }
  
  }

 
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./conn.css">
<Title>Connexion</Title>
<body>
	<form method="POST">
		<h2>FORMULAIRE</h2>
		<?php if (!empty($message)) { ?>
    <p><?php echo $message; ?></p>
<?php } ?>

<?php if(!empty($_GET['rhAuth'])){ ?>
  <p><?php echo $_GET['rhAuth']; ?></p>
  <?php
}
?>
		<label>Email:</label>
		<input type="email" name="email" autocomplete="off" placeholder="veuillez entrer votre email..." required=""><br>
        <label>Mot de passe:</label>
		<input type="password" name="mdp" autocomplete="off" placeholder="votre mot de passe..." required=""><br>
		<button type="submit" name="envoi">Connect</button>
	</form>