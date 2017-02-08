<?php

class Item{
    public $nom="";
    public $prix;
    function __construct($pName,$pPrice){
        $this->nom=$pName;
        $this->prix=$pPrice;
    }
    function setName($pName){$this->nom=$pName;}
    function setPrice($pPrice){$this->prix=$pPrice;}
    function getName(){return $this->nom;}
    function getPrice(){return $this->prix;}
}
?>