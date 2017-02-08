<?php 
	class Catalog extends Item{
		private $liste = [];
		function __construct(){}
		function getCatalog($type=false){
			$temp = [];
			if($type){
				for($i=0;$i<sizeof($this->liste);$i++){
					if($this->liste[$i]->nom == $type)
						$temp[sizeof($temp)] = $this->liste[$i];
				}
				return $temp;
			}else
				return $this->liste;
		}
		function addProduit($n,$p,$t){
			$prod = new Item($n,$p,$t);
			$this->liste[sizeof($this->liste)] = $prod;
		}
		function getNom($id){
			$tmp = $this->getCatalog($id);
			return $tmp[0]->nom;
		}
		function getPrixI($id){
			$tmp = $this->getCatalog($id);
			return $tmp[0]->prix;
		}
		function getTypeI($id){
			$tmp = $this->getCatalog($id);
			return $tmp[0]->type;
		}
	}
	class Item{
		protected $nom, $prix, $type;		
		function __construct($n,$p,$t){
			$this->nom = $n;
			$this->prix = $p;
			$this->type = $t;
		}
		function getItem(){
			return $this->produit;
		}
	}
	class Commande extends catalog{
		private $com = [];
		function addProd($i){
			$this->com[sizeof($this->com)]= $i;
		}
		function getCom(){
			return $this->com;
		}
		function getPrix(){
			$calc=0;
			for($i=0;$i<sizeof($this->com);$i++){
				for($j=0;$j<sizeof($this->com[$i]);$j++){
					$calc += $this->com[$i][$j]->prix;}
			}
			return $calc;
		}
	}
?>