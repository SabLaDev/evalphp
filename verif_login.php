
<?php 
session_start();
require_once 'header.php' ?>

<div class="container">
    <?php
            
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        $sql = "SELECT * FROM `login`WHERE 
        `email`= :email
        AND
        `password` = :password";

        $result = $bdd->prepare($sql);
        $email = htmlentities(addslashes($_POST['email']));
        $password = htmlentities(addslashes($_POST['password']));
        $result->bindValue(':email', $email);
        $result->bindValue(':password', $password);

        $result->execute();
        $admin = $result->fetch();
        $nblignes = $result->rowCount();

        if ($nblignes != 0) {
            $_SESSION["admin"]=$admin->login ;
            header("location:listProductAdmin.php");
            //echo "<span style='color:#008000'> login correct</span>";
        } else {
            $_SESSION['echeclogin']="Votre login et/ou mdp est incorrect";
            header("location:login.php?message=1");
        }
        $result->closeCursor();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
</div>
<?php require_once 'footer.php' ?>