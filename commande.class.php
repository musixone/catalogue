<?php

class Commande{
	
	private $panier = [];  // panier - on utilise $_SESSION['panier']
		
	function __construct(){	
	}	
	
	function initPanier(){		
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = [];
		}
	}
	
	function addPanier($nom, $ref, $desc, $prix){  //ou simplifier param ref ?
		if(!isset($_SESSION['panier'])) $_SESSION['panier'] = new Item($nom, $ref, $desc, $prix);
		return $_SESSION['panier'];
	}			

	function supprimePanier(){	
	
	}
	
	function validePanier(){	
	}
	
	function totalPanier(){
		$total = 0;	
		for($i=0,$il=count($_SESSION['panier']);$i<$il;$i++){
            $this->total += $_SESSION['panier'][$i]->prix;
        }
        return $this->total; 	
	}
	
}

?>
