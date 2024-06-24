<?php
session_start();

if(empty($_SESSION['id_rh'])){
	$message= "veuillez-vous connecter pour vous rendre dans l espace RH";
	header("location:../connexion.php?rhAuth='.$message.'");

}
$CheminAct = $_SERVER["REQUEST_URI"];

if($CheminAct=='/prjet/RH/register.php'){
 echo "nous sommes sur cette page";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <!-- ======= Styles ====== -->
    

    

    <link rel="stylesheet" href="./ressource_profil/assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title"><?php echo $_SESSION['em_rh'];?></span>
                    </a>
                </li>

                <li>
                    <a href="./index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Menu Principale</span>
                    </a>
                </li>

                <li style="background: white; text-color: blue;">
                    <a href="./register.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Création des Stagiaires</span>
                    </a>
                </li>
                <li>
                    <a href="./register">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Création des Employés</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Modification des informations</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Association</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>


                <li>
                    <a href="./deconnexion.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                         <span class="title"> Deconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
        

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

               
            </div>

            <!-- ======================= Register ================== -->
 
 
        
        <form action="ajouteremp.php" method="post"  >
        <h2>Inscription</h2>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Email:</label>
                <input type="password" id="pwd" name="pwd" required>
            </div>
            <div class="form-group">
                <label>Type:</label>
                <input type="radio" id="type_Emp" name="genre" value="Employe" checked>
                <label for="type_Emp">Employe</label>
                <input type="radio" id="type_Stag" name="genre" value="Stagiaire">
                <label for="type_Stag">Stagiaire</label>
            </div>
            <button type="submit" name="envoi">S'inscrire</button>
        </form>
  
</body>


            <!-- ================ Order Details List ================= -->
           


    <!-- =========== Scripts =========  -->
    <script src="./ressource_profil/assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    


   
  

   
</body>

</html>
<style>
 
form{
    margin-left: 50px;
}


h2 {
    text-decoration: underline;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="number"] {
    width: 75%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="radio"] {
    margin-right: 5px; /* Espacement entre les boutons radio */
}

label.radio-label {
    margin-right: 15px;
    display: flex; /* Espacement entre les boutons radio et leur texte */
}

button {
    display: block;
    width: 75%;
    padding: 10px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: black;
}

</style>