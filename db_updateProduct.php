<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE product SET designation=:designation, price=:price WHERE id=:id";

    $result = $bdd->prepare($sql);
    $designation = htmlentities(addslashes($_POST['designation']));
    $price = htmlentities(addslashes($_POST['price']));
    $id = htmlentities(addslashes($_POST['id']));
    $result->bindValue(':designation', $designation);
    $result->bindValue(':price', $price);
    $result->bindValue(':id', $id);

    $result->execute();

    $result->closeCursor();

    //echo "<span style color='#008000'>Produit modifié!</span>";
    header('location:listProductAdmin.php');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
