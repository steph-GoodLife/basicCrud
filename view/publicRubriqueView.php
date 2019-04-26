<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>basicCrud Rubriques</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- Navigation -->
<?php
include "publicMainMenuView.php";
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">basicCrud Rubriques:<?= $detailRubrique['theintitule'] ?></h1>
            <p class="lead">Liste des rubriques de notre site</p>
        </div>
    </div>
    <!-- rubriques -->
    <?php
    // pas de rubriques
    if($articleRub===false){
        ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr>
                <h2>Pas encore d'articles</h2>
                <h3>Veuillez revenir plus tard</h3>
                <hr>
            </div>
        </div>
        <?php
    }else {
        foreach ($articleRub AS $itemRubriques) {
            // pas de rubriques
            if(isset($itemRubriques['idrubrique'])){
                $idrubrique="";
            }else {

            }
            ?>
            <div class="row">
                <div class="col-lg-12 text-left">

                    <h4>Catégorie :<h4><?= $articleRub['theintitule'] ?></h4>
                        <small><?php
                            if(!isset($articleRub)){
                                ?>
                                Cet article n'est dans aucune catégorie
    <?php
                            }
                            ?></small></h4>
    <p><?php
        $position_last_space = strrpos($detailRubrique['thedesc'],' ');
        echo substr($detailRubrique['thedesc'],0,$position_last_space);
        ?> ... <a href="?idrubrique=<?= $itemRubriques ?>">Lire la suite</a></p>
</div>
</div>
<hr>
<?php
}
}
?>
</div>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
