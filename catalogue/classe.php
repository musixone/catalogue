<?php 
	class Catalog {
		private $liste = [];
		function __construct(){}
		function getCatalog($nom=false){
			if(!$nom) return $this->liste;
			for($i=0,$il=sizeof($this->liste);$i<$il;$i++){
				if($this->liste[$i]->nom == $nom){
					return array($this->liste[$i]);
				}
			}
		}
		function addProduit($nom, $prix, $type){
			$this->liste[] = new Item($nom, $prix, $type);
		}
		function getNom($id){
			return $this->getCatalog($id)[0]->nom;
		}
		function getPrixI($id){
			return $this->getCatalog($id)[0]->prix;
		}
		function getTypeI($id){
			return $this->getCatalog($id)[0]->type;
		}
	}
	class Item{
		public $nom, $prix, $type;		
		function __construct($nom, $prix, $type){
			$this->nom = $nom;
			$this->prix = $prix;
			$this->type = $type;
		}
	}
	class Commande {
		private $com = [];
		function addProd($i){
			$this->com[]= $i;
		}
		function getCom(){
			return $this->com;
		}
		function getPrix(){
			$calc=0;
			for($i=0, $il=sizeof($this->com);$i<$il;$i++){
				$calc += $this->com[$i][0]->prix;
			}
			return $calc;
		}
	}
?>