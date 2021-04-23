<?php
session_start();

require_once 'headerAdmin.php' ?>

<div class="container">
    <h1>Mon Profil</h1>
    <form action="db_updateuser.php" method="post">
        <?php
        try {
            //$id=$_GET["updateuser"];
            $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM user";
            $result = $bdd->prepare($sql);

            $result->execute();
            while ($user = $result->fetch(PDO::FETCH_OBJ)) {
                echo
                '
                <div class="row">
            <div class="mb-3 col-6">
                <label for="lastname" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="id" name="id" value=' . $user->id . '>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value=' . $user->lastname . '>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value=' . $user->firstname . '>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="mail" class="form-control" id="email" name="email" value=' . $user->email . '>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value=' . $user->password . '>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <button type="submit" class="btn btn-warning">Modifier</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </div>
        <br>'
        ?>
        <?php
            }
            $result->closeCursor();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        ?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


</div>

<?php require_once 'footer.php' ?>