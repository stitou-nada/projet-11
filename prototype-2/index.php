
<?php 
include 'gestionProduit.php';
$gestionProduit = new GestionProduit();
$data= $gestionProduit->afficher();

foreach($data as $value){
  
?>
<a href="detail de produit.php?id=<?= $value->getId();?>">
<?php 
   echo "<br>".$value->getNom();
 
 ?>
 </a>

<?php } ?>
<br>
<a href="panier.php">panier</a>
