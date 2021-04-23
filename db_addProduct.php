<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO product (designation, price) 
    VALUES(:designation, :price)";

    $result = $bdd->prepare($sql);
    $designation = htmlentities(addslashes($_POST['designation']));
    $price = htmlentities(addslashes($_POST['price']));
    $result->bindValue(':designation', $designation);
    $result->bindValue(':price', $price);

    $result->execute();

    $result->closeCursor();

    echo "<span style color='#008000'>Nouveau bonbon ajouté.</span>";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
