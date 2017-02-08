<pre>
<?php
	include_once("classe.php");
	session_start();

	
	$comm = new Commande();
	$cata = new Catalog();
	$cata->addProduit("Pull 1",3,"Pull");
	$cata->addProduit("Pull 2",4,"Pull");
	$cata->addProduit("Pull 3",3.5,"Pull");
	$cata->addProduit("Pantalon 1",5,"Pantalon");
	$cata->addProduit("Pantalon 2",7,"Pantalon");
	$cata->addProduit("Pantalon 3",4,"Pantalon");
	$cata->addProduit("Chaussette 1",2,"Chaussette");
	$cata->addProduit("Chaussette 2",2.5,"Chaussette");
	$cata->addProduit("Chaussette 3",1.5,"Chaussette");
	if (isset($_SESSION["commande"])){
		for($i=0;$i<sizeof($_SESSION["commande"]);$i++){
			$temp;
			switch($_SESSION["commande"][$i]){
				case "Pull 1":
				case "Pull 2":
				case "Pull 3":
				case "Pantalon 1":
				case "Pantalon 2":
				case "Pantalon 3":
				case "Chaussette 1":
				case "Chaussette 2":
				case "Chaussette 3":
					$comm->addProd( 
						$cata->getCatalog($_SESSION["commande"][$i])
					);
					break;
				default:
					echo "article inconnu";
			}

		}
		print_r($comm->getCom());
		echo "Prix à payer: ".$comm->getPrix()."€";
	}else
		echo "<h2>Panier vide</h2>";
?>
</pre>
<br />
<a href="index.php">Retour</a>