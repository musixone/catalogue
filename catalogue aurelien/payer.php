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
					$temp = $cata->getCatalog("Pull 1");
					break;
				case "Pull 2":
					$temp = $cata->getCatalog("Pull 2");
					break;
				case "Pull 3":
					$temp = $cata->getCatalog("Pull 3");
					break;
				case "Pantalon 1":
					$temp = $cata->getCatalog("Pantalon 1");
					break;
				case "Pantalon 2":
					$temp = $cata->getCatalog("Pantalon 2");
					break;
				case "Pantalon 3":
					$temp = $cata->getCatalog("Pantalon 3");
					break;
				case "Chaussette 1":
					$temp = $cata->getCatalog("Chaussette 1");
					break;
				case "Chaussette 2":
					$temp = $cata->getCatalog("Chaussette 2");
					break;
				case "Chaussette 3":
					$temp = $cata->getCatalog("Chaussette 3");
					break;
				default:
					echo "article inconnu";
			}
			$comm->addProd($temp);
		}
		print_r($comm->getCom());
		echo "Prix à payer: ".$comm->getPrix()."€";
	}else
		echo "<h2>Panier vide</h2>";
?>
</pre>
<br />
<a href="index.php">Retour</a>