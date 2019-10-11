<?php
require 'header.php';
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;

// if (isset($_GET['chiffre'])) {
//       if($_GET['chiffre'] > $aDeviner){
//           $erreur = " Votre chiffre est trop grand";
//       }elseif ($_GET['chiffre'] < $aDeviner) {
//         $erreur = " Votre chiffre est trop petit";
//       }else{
//           $succes = "Bravo ! vous avez deviner le chiffre <strong>$aDeviner</strong> ";

//       }
//       $value = (int)$_GET['chiffre'];
// }
?>




<div class="container">

<!-- htmlentities — Convertit tous les caractères éligibles en entités HTML
METHODE GET 
 -->

<?php if($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif($succes): ?>
    <div class="alert alert-success">
        <?= $succes; ?>
    </div>
<?php endif ?>

<h3>METHODE GET </h3>
    <!-- <form action="/jeu.php" method="GET">
    <div class="form-group">
        <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div>
        <button type="submit" class="btn btn-primary">Deviner</button>
    </form> -->
</div>
 
<hr>
<h3>METHODE POST </h3>

<?php if($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif($succes): ?>
    <div class="alert alert-success">
        <?= $succes; ?>
    </div>
<?php endif ?>
<?php

if (isset($_POST['chiffre'])) {
    $value = (int)$_POST['chiffre'];
      if($value > $aDeviner){
          $erreur = " Votre chiffre est trop grand";
      }elseif ($value < $aDeviner) {
        $erreur = " Votre chiffre est trop petit";
      }else{
          $succes = "Bravo ! vous avez deviner le chiffre <strong>$aDeviner</strong> ";

      }
  
} ?>
<div class="container">
    <form action="/jeu.php" method="POST">
    <div class="form-group">
        <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div>
        <button type="submit" class="btn btn-primary">Deviner</button>
    </form>
</div>
</div>

<?php require 'footer.php'; ?>