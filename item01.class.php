<?php

class Item{
	private $nom;
	private $ref;
	private $desc;
	private $prix;
	
	
	function __construct($nom, $ref, $desc, $prix){
		$this->setNom($nom);
		$this->setRef($ref);
		$this->setDesc($desc);
		$this->setPrix($prix);
	}
		
    function setRef($ref){
        $this->ref = $ref;
    }
    function getRef(){
        return $this->ref;
    }	
    function setNom($nom){
        $this->nom = $nom;
    }
    function getNom(){
        return ucwords($this->nom);
    }
    function setDesc($desc){
        $this->desc = $desc;
    }
    function getDesc(){
        return ucwords($this->desc);
    }
    function setPrix($prix){
        $this->prix = $prix;
    }
    function getPrix(){
        return $this->prix;
    }
}


	
?>
