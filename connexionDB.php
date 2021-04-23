<?php
require("config.php");
function connexion()
{
    try {
        $bdd = new PDO('mysql:host='.HOST.';dbname='.DBNAME , USER, PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion ok.";
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    } finally {
        $bdd = null;
    }
}
