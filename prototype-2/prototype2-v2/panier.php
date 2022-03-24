<?php 
session_start();

// print_r($_SESSION["paniers"]);

include 'gestionProduit.php';

$gestionProduit = new GestionProduit();

$listProduits = $gestionProduit->getPanier();


?>

        <table  width="20%" >
      
             <tr >
                <th>id</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
                <th>Action</th>
      
             </tr>
            
      
        <?php
          foreach($listProduits as $value){
          

            ?>
          
            <tr>
              
                <td><?= $value["id"] ?></td>
                <td><?= $value["nom"] ?></td>
                <td><?= $value["prix"] ?> dh</td>
                <td><?= $value["quantite"]?></td>
            
              
            </tr>

            
             
        <?php } ?>


     </table>

   

     <a href="index.php">back</a>


     