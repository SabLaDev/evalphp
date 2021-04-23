<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE user
    SET lastname=:lastname, firstname=:firstname, email=:email, password=:password";

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

    echo "<span style color='#008000'>Votre compte à bien été modifié!.</span>";
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
