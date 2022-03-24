<?php
include "produit.php";




class GestionProduit {

    public $name ;

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'site-e-commerce');
           
         
       
        
        return $this->Connection;
    }


  
    
    
    
    // pour ajouter session
    public function set($id,$value){
        $_SESSION["paniers"]["produits"][$id] = $value ;

    }

      // afficher session dans tableau

      public function getPanier(){
        if(isset($_SESSION["paniers"]["produits"])){
            return $_SESSION["paniers"]["produits"];
            
        }
    }

 
        
// afficher  les produits 

        public function afficherProduit(){
            $SelctRow = "SELECT * FROM produits ";
            $query = mysqli_query($this->getConnection() ,$SelctRow);
            $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            $TableData = array();
            foreach ($produits_data as $value) {
                $produit = new Produit();
                $produit->setId($value['id']);
                $produit->setNom($value['Nom']);
                $produit->setPrix($value['Prix']);
               
                array_push($TableData, $produit);
            }
              return $TableData;
        }
      
 

    



    }
