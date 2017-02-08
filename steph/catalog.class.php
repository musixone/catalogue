<?php
include("item.class.php");
include("commande.class.php");
class Catalog{
    var $name;
    var $price;
    var $liste=array(); // tableau contenant tous mes items
    var $panier=array();

    function __construct(){}
    function addItem($pName,$pPrice){ // permet de rajouter un item , param NOM ET PRIX
        $monItem = new Item($pName,$pPrice);
        array_push($this->liste,$monItem);
    }
    function getItem($pNom =false){ // recupere l'objet, sans param affiche le tableau, avec selectionne l'objet
        if(!$pNom){return $this->liste;}
        else{
            for($i=0,$il= count($this->liste);$i<$il;$i++){//parcours mon tableau pour recup l'objet
                $itemName = $this->liste[$i]->nom;
                if ($pNom == $itemName){return $this->liste[$i];}
            }
        }
    }
}

?>