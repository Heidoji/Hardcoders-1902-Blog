<?php
    //connexion à la base de données
    $host = "127.0.0.1:3306";
    $user = "root";
    $password = "root";
    $nom_db = "db_hc_1902blog";

    echo '<script>console.log("Connected to the database");</script>';

    $connexion_a_la_bdd = mysqli_connect($host, $user, $password, $nom_db)or die("Error " . mysqli_error($connexion_a_la_bdd));
?>
