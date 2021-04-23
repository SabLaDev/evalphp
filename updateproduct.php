<?php 
session_start();

require_once 'header.php' ?>


<div class="container">
    <h1>Modifier les produits</h1>
    <form action="db_updateProduct.php" method="post">
        <?php
        try {
            $id=$_GET["update"];
            $bdd = new PDO('mysql:host=localhost;dbname=candyshop', 'root', 'root');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM product WHERE id=$id";
            $result = $bdd->prepare($sql);

            $result->execute();

            while ($product = $result->fetch(PDO::FETCH_OBJ)) {
                echo '
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="id" class="form-label">Référence</label>
                        <input type="text" class="form-control" id="id" name="id" value=' . $product->id . '>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="designation" class="form-label">Désignation</label>
                        <input type="text" class="form-control" id="designation" name="designation" value=' . $product->designation . '>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-6">
                        <label for="price" class="form-label">Prix</label>
                        <input type="text" class="form-control" id="price" name="price" value=' . $product->price . '>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-6">
                        <button type="submit" class="btn btn-warning">Modifier</button>
                    </div>
                </div>'
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


<?php require_once 'footer.php' ?>