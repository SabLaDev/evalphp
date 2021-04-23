<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO user (lastname, firstname, email, password) 
    VALUES(:lastname, :firstname, :email, :password)";

    $result = $bdd->prepare($sql);
    $lastname = htmlentities(addslashes($_POST['lastname']));
    $firstname = htmlentities(addslashes($_POST['firstname']));
    $email = htmlentities(addslashes($_POST['email']));
    $password = htmlentities(addslashes($_POST['password']));
    $result->bindValue(':lastname', $lastname);
    $result->bindValue(':firstname', $firstname);
    $result->bindValue(':email', $email);
    $result->bindValue(':password', $password);

    $result->execute();

    $result->closeCursor();

    echo "<span style color='#008000'>Un nouvel utilisateur à bien été créé.</span>";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
