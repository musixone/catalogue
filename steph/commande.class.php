<?php

class Command{
    public $itemList=array();
    public $total=0;
    function __construct(){}
    function addOnList($name){ // push tous nos items dans un tableau pour la liste!
        array_push($this->itemList,$name);
    }
    
    function getList(){//return notre tableau "itemList"
        return $this->itemList;
    }
    function prixTotal(){ // recupere la valeur prix de chacun de nos item dans nnotre liste et les additionnes
        $total=0;
        for($i=0,$il=count($this->itemList);$i<$il;$i++){
            $this->total += $this->itemList[$i]->prix;
        }
        return $this->total; // return le total de la commande (prix)
    }
}
?>