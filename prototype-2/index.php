



<?php  

include 'gestionProduit.php';

$gestion = new GestionProduit();
$data = $gestion->afficherProduit();

foreach($data as $value){
?>
   <h1><?= $value->getNom();?></h1>
   <p> Prix:<?= $value->getPrix();?></p>
   <?php 
}
?>

<form action="ajouter.php" method="POST">
<p>
<label for=""> Quantité</label>
<input type="number" name="qnt" >
</p>
<p>
<input type="hidden" name="id" value="<?=  $value->getId() ?>">
<button type="submit">ajouter au panier</button>
</p>
</form>

