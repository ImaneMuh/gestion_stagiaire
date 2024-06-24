<?php
$_SERVER="localhost";
//$utilisateur="root";

$con=mysqli_connect('localhost','root','','gestion_stage');
$id=$_GET['id'];
$req=mysqli_query($con,"SELECT * FROM employe WHERE id_emp=$id");
$rows=mysqli_fetch_assoc($req);
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations personnelles</title>
    <link rel="stylesheet" > <!-- Fichier CSS pour les styles (optionnel) -->
</head>
<body>

<div class="container">
    <h1>Informations personnelles</h1>
    <a href="./index.php" class="back-link"> Retour</a> 
    <div class="profile">
        <img src="profil.png" alt="Photo de profil">
        <div class="profile-details">
            <p><strong>Nom :</strong> <?php echo $rows['nom_emp'];?></p>
            <p><strong>Email :</strong> <?php echo $rows['email_emp'];?> </p>
            <p><strong>Service :</strong><?php echo $rows['service_emp'];?></p>
            <p><strong>Numéro du téléphone :</strong><?php echo $rows['tel_emp'];?></p>
            
        </div>
    </div>
</div>
</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: black;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    h1 {
    text-align: center;
    color: #333;
}

.profile {
    display: flex;
    align-items: center;
    margin-top: 20px;
   
}

.profile img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.profile-details {
    margin-left: 20px;
}

.profile-details p {
    margin: 8px 0;
}

.profile-details p strong {
    font-weight: bold;
    color: #555;
}
back-link {
    display: inline-block;
    margin-bottom: 10px;
    font-size: 18px;
    color: #007bff; /* Couleur du lien bleu */
    text-decoration: none; /* Enlever la décoration de soulignement */
}

.back-link:hover {
    text-decoration: underline; /* Souligner le lien au survol */
}
</style>
