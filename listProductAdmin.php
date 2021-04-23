<?php
session_start();
require_once 'headerAdmin.php' ?>
<div class="container">
    <!--     <div class="alert alert-success alert-dismissible fade show" role="alert">
        Bienvenue sur votre espace personnel!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> -->
    <h2>Liste des Bonbons mis en vente</h2>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM product";

        $result = $bdd->prepare($sql);
        $result->execute();

        while ($product = $result->fetch()) { ?>


            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['designation']; ?></h5>
                    <p class="card-text"> <?php echo $product['price']; ?> €</p>
                    <a href='updateproduct.php?update="<?php echo $product['id']; ?>"' class="btn btn-warning">Modifier</a>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
    <?php
        }
        $result->closeCursor();
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    ?>
</div>
<?php require_once 'footer.php' ?>