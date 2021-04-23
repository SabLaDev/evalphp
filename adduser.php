<?php require_once 'header.php' ?>

<div class="container">
    <h1>Création d'un nouveau compte utilisateur</h1>
    <form action="db_adduser.php" method="post">
    <div class="row">
            <div class="mb-3 col-6">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="exemple: SMITH">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="exemple: Barry">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="mail" class="form-control" id="email" name="email" placeholder="exemple: Bsmith">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="exemple: schtroumpf124">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <button type="submit" class="btn btn-success">Créer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
        </div>
        <br>
        <?php

        if (isset($_GET['message']) && $_GET['message'] == '1') {
            echo "<span style='color:#ff0000'> login incorrect</span>";}
        ?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<?php require_once 'footer.php' ?>