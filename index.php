
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
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="./ressources_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./ressources_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./ressources_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./ressources_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="./ressources_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./ressources_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./ressources_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="./ressources_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="./ressources_login/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title">
						SDSI Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mdp" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" name="envoi">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="./ressources_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./ressources_login/vendor/bootstrap/js/popper.js"></script>
	<script src="./ressources_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./ressources_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./ressources_login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="./ressources_login/js/main.js"></script>

</body>
</html>