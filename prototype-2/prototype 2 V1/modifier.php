<?php  
session_start();

include 'gestionProduit.php';

$gestion = new GestionProduit;
$id = $_GET["id"];
$value = $gestion->getProduit($_GET["id"]);

?>

<h1><?=$value['nom'];?></h1>
<p> Prix:<?=  $value['prix']; ?> dh</p>


<form action="ajouter.php" method="POST">
<p>
<label for=""> Qauntite</label>
<input type="number" name="quantite" value="<?=$value["quantite"] ?>">
</p>
<p>
<input type="hidden" name="id" value="<?=$value["id"] ?>">
<button type="submit">ajouter au panier</button>
</p>
</form>
