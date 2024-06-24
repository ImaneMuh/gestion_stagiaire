<?php
session_start();

if(empty($_SESSION['id_rh'])){
	$message= "veuillez-vous connecter pour vous rendre dans l espace RH";
	header("location:../connexion.php?rhAuth='.$message.'");


}

//$utlisateur='root';
$motdepasse='';
$base='gestion_stage';
$connection=mysqli_connect('localhost','root','','gestion_stage');

$CheminAct = $_SERVER["REQUEST_URI"];

if($CheminAct=='/prjet/RH/index.php'){
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

                <li style="background: white; text-color: blue;">
                    <a href="./index.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Menu Principale</span>
                    </a>
                </li>

                <li>
                    <a href="./register2.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Création des Stagiaires</span>
                    </a>
                </li>
                <li>
                    <a href="./register.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Création des Employés</span>
                    </a>
                </li>
                <li>
                    <a href="./creation.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Création des utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="./register.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Modification des infos des Employés</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Modification des infos des stagiaires</span>
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a href="./table-01" class="card">
                    <div>
                            <div class="numbers"><?php 
                            $con=mysqli_connect('localhost','root','','gestion_stage');
                            $req=mysqli_query($con,"SELECT COUNT(id_emp) as compteur FROM employe");
                            $row=mysqli_fetch_assoc($req);
                            echo $row['compteur'];
                            ?></div>
                        <div class="cardName">Liste des employés</div>
                    </div>

                  
</a>

                <a href="./table-02" class="card">
                    <div>
                        <div class="numbers"><?php 
                        $con=mysqli_connect('localhost','root','','gestion_stage');
                        $req=mysqli_query($con,"SELECT COUNT(id_stag) as compteur FROM stagiaire");
                        $row=mysqli_fetch_assoc($req);
                        echo $row['compteur'];?></div>
                        <div class="cardName">Liste des stagiaires</div>
                    </div>

                    
                </a>

                <div class="card">
                    <div>
                        <div class="numbers"><?php 
                        $con=mysqli_connect('localhost','root','','gestion_stage');
                        $req=mysqli_query($con,"SELECT COUNT(cod) as compteur FROM tache");
                        $row=mysqli_fetch_assoc($req);
                        echo $row['compteur'];?></div>
                        <div class="cardName">Liste des taches</div>
                    </div>
                </div>

              
            </div>

            <!-- ================ Liste des stagiaires ================= -->

            <div style="display: flex; align-items: top; justify-content: space-around;">
                <table class="styled-table">
                    <caption> Liste des employés</caption>
                    <tr>
                        <th> id </th>
                        <th> nom </th>
                        <th> email </th>
                        <th>consultation </th>
                    </tr>
                 
                        <?php
                        $select="SELECT *FROM  employe LIMIT 10";
                        $Affichage=$connection->query($select);
                        $etu=mysqli_num_rows($Affichage);
                        while($rows=mysqli_fetch_assoc($Affichage)){
                        $id=$rows['id_emp'];
                        $numero=$rows['nom_emp'];
                        $d=$rows['email_emp'];
                        echo " <tr>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$numero."</td>";
                        echo "<td>".$d."</td>";
                        echo " <td><a href='./consulte.php?id=".$id."'>consulter </td>";
                        echo " </tr>";
                        } 
                        ?>
                        
                   
                 </table>
                 <table class="styled-table">
                    <caption> Liste des stagiaires</caption>
                    <tr>
                        <th> id </th>
                        <th> nom </th>
                        <th> email </th>
                        <th>consultation </th>
                    </tr>
                   
                        <?php
                    
                        $select="SELECT *FROM  stagiaire LIMIT 10";
                        $Affichage=$connection->query($select);
                        $etu=mysqli_num_rows($Affichage);
                        while($rows=mysqli_fetch_assoc($Affichage)){
                        $id=$rows['id_stag'];
                        $numero=$rows['nom_stag'];
                        $d=$rows['email_stag'];
                        echo " <tr>";
                        echo "<td>".$id."</td>";
                        echo "<td>".$numero."</td>";
                        echo "<td>".$d."</td>";
                        echo " <td><a href='./consulte2.php?id=".$id."'>consulter </td>";
                        echo " </tr>";
                        }
                       ?>
                       
                    
                 </table>
            </div>
           


    <!-- =========== Scripts =========  -->
      <!--  <script src="./ressource_profil/assets/js/main.js"></script> -->

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
<script>



// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


</script>
<style>

 .styled-table {
    width: 45%;
    border-collapse: collapse;
    border: 1px solid #ddd; /* Bordure autour du tableau */
    font-family: Arial, sans-serif;
}

/* Style pour l'en-tête du tableau */
.styled-table th {
    background-color: #f2f2f2; /* Couleur de fond de l'en-tête */
    border: 1px solid #ddd; /* Bordure des cellules de l'en-tête */
    padding: 8px; /* Espacement interne des cellules */
    text-align: left; /* Alignement du texte à gauche */
}

/* Style pour les cellules de données */
.styled-table td {
    border: 1px solid #ddd; /* Bordure des cellules de données */
    padding: 8px; /* Espacement interne des cellules */
    text-align: left; /* Alignement du texte à gauche */
}

/* Style pour les lignes alternées (optionnel) */
.styled-table tbody tr:nth-child(even) {
    background-color: #f9f9f9; /* Couleur de fond des lignes paires */
}
/* Styles pour la balise <caption> */
caption {
    font-size: 18px; /* Taille de la police */
    font-weight: bold; /* Gras */
    text-align: center; /* Centrage du texte */
    padding: 10px; /* Espacement interne */
    background-color: #f0f0f0; /* Couleur de fond */
    color: #333; /* Couleur du texte */
    border-bottom: 2px solid #ccc; /* Bordure en bas */
}
</style>
</html>