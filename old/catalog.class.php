<?php
/* TEST ModiF GITHUB */
include_once('item.class.php');

class Catalog{
	
	private $liste=[];  		//tableau d'items
	//private $item;
	var $recherche = []; 		// tableau pour recherche par nom d'articles
	
	function __construct(){					/*$nom, $ref, $desc, $prix*/
		//$this->item = new Item();
	}
	
	function getCatalog(){	
        return $this->liste;
	}

	function addItem($nom, $ref, $desc, $prix){
		$tmp = new Item($nom, $ref, $desc, $prix);  //passage des param à item pour entrer les val ds var d'item pr index print_r($cat->getItem('003'));
		$tmp->setNom($nom);	
		$tmp->setRef($ref);		
		$tmp->setDesc($desc);
		$tmp->setPrix($prix);		
		array_push($this->liste, $tmp);   	 // OU $this->liste[sizeof($this->liste)]=$tmp; 	
	}

	function getItem($var = false){   	 	 // = false pour enelever message err absence de parametre
		if(!$var){
				return $this->liste;
		}else{		
			$reg = preg_match('/([0-9]{3,})/', $var);
			switch($reg){
			case 1:   		// Réf trouvée => recherche par No de Réf

				for($i=0,$il = count($this->liste);$i<$il;$i++){
					$checkRef = $this->liste[$i]->getRef();
					if($var == $checkRef){
						return $this->liste[$i]; // 1 seule ligne car 1 seule réf possible
					}
				}
			case 0:		// recherche par Nom de produit
				$j=0;
				for($i=0,$il = count($this->liste);$i<$il;$i++){
					$checkNom = $this->liste[$i]->getNom();
					if($var == $checkNom){
						$recherche[$j] = $this->liste[$i];  //tableau car plusieurs réponses possibles
						$j++;
					}
				}
				return $recherche;
			default:
			echo '<br>Erreur...<br>';			
			}
		}	
	}	
	
	/*
	function getItem($ref){
		if(!$ref){
            return $this->liste;
        }else{
            for($i=0,$il = count($this->liste);$i<$il;$i++){
                $checkRef = $this->liste[$i]->getRef();
                if($ref == $checkRef){
                    return $this->liste[$i];
                }
            }
        }	
	}	*/	
}

?>
