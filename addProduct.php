<?php require_once 'header.php' ?>
<div class="container">
    <h1>Ajouter de nouveaux bonbons</h1>
    <form action="db_addProduct.php" method="post">
        <div class="row">
            <div class="mb-3 col-6">
                <label for="designation" class="form-label">Désignation</label>
                <input type="text" class="form-control" id="designation" name="designation" placeholder="exemple: Haribo Pik">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <label for="price" class="form-label">Prix</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="exemple: 2,50">
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
                <button type="submit" class="btn btn-success">Ajouter</button>
            </div>
        </div>
    </form>
</div>
<?php require_once 'footer.php' ?>