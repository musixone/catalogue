<html>
	<head>
		<style>
			.content{max-width:1280px;margin:auto;text-align:center}
			.article{width:33.333%;float:left;border: 1px solid black;box-sizing:border-box;padding-bottom:20px;padding-top:20px}
			.article:after{clear:left}
			h3{text-align:center}
			pre{text-align:left}
		</style>
	</head>
	<body>
		<?php
			include_once("classe.php");
			session_start();
			if(isset($_POST["article"])){
				if ( empty($_SESSION["commande"]))
					$_SESSION["commande"] = [];
			}
			if(isset($_POST['achat']))
				array_push($_SESSION["commande"],$_POST["achat"]);
			if(isset($_POST["vider"]))
				unset($_SESSION["commande"]);			
			
			$cata = new Catalog();
			$cata->addProduit("Pull 1", 3,"Pull");
			$cata->addProduit("Pull 2",4,"Pull");
			$cata->addProduit("Pull 3",3.5,"Pull");
			$cata->addProduit("Pantalon 1",5,"Pantalon");
			$cata->addProduit("Pantalon 2",7,"Pantalon");
			$cata->addProduit("Pantalon 3",4,"Pantalon");
			$cata->addProduit("Chaussette 1",2,"Chaussette");
			$cata->addProduit("Chaussette 2",2.5,"Chaussette");
			$cata->addProduit("Chaussette 3",1.5,"Chaussette");
		?>
		<form class="content" method="POST">
			
			<h2>Produit</h2>
			<h3>Pull</h3>
			<div class="article">
				<input type="hidden" name="achat" Value="Pull 1"/>
				<?php
					print_r("Article: ".$cata->getNom("Pull 1")."<br />");
					print_r("Prix: ".$cata->getPrixI("Pull 1")."€<br />");
				?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Pull 2"/>
			<?php
				print_r("Article: ".$cata->getNom("Pull 2")."<br />");
				print_r("Prix: ".$cata->getPrixI("Pull 2")."€<br />");
			?>
			<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Pull 3"/>
			<?php
				print_r("Article: ".$cata->getNom("Pull 3")."<br />");
				print_r("Prix: ".$cata->getPrixI("Pull 3")."€<br />");
				?>
			<button name="article">Ajouter au panier</button>
			</div>
		</form>
			<div style="height:30px;width:100%;clear:left"></div>
		<h3>Pantalon</h3>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Pantalon 1"/>
				<?php
					print_r("Article: ".$cata->getNom("Pantalon 1")."<br />");
					print_r("Prix: ".$cata->getPrixI("Pantalon 1")."€<br />");
				?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Pantalon 2"/>
				<?php
					print_r("Article: ".$cata->getNom("Pantalon 2")."<br />");
					print_r("Prix: ".$cata->getPrixI("Pantalon 2")."€<br />");
					?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Pantalon 3"/>
				<?php
					print_r("Article: ".$cata->getNom("Pantalon 3")."<br />");
					print_r("Prix: ".$cata->getPrixI("Pantalon 3")."€<br />");
				?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<div style="height:30px;width:100%;clear:left"></div>
		<h3>Chaussette</h3>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Chaussette 1"/>
				<?php
					print_r("Article: ".$cata->getNom("Chaussette 1")."<br />");
					print_r("Prix: ".$cata->getPrixI("Chaussette 1")."€<br />");
				?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Chaussette 2"/>
				<?php
					print_r("Article: ".$cata->getNom("Chaussette 2")."<br />");
					print_r("Prix: ".$cata->getPrixI("Chaussette 2")."€<br />");
					?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<form class="content" method="POST">
			<div class='article'>
			<input type="hidden" name="achat" Value="Chaussette 3"/>
				<?php
					print_r("Article: ".$cata->getNom("Chaussette 3")."<br />");
					print_r("Prix: ".$cata->getPrixI("Chaussette 3")."€<br />");
				?>
				<button name="article">Ajouter au panier</button>
			</div>
		</form>
		<div style="height:30px;width:100%;clear:left"></div>
		<div class="content">
			<form method="POST">
				<input type="hidden" name="vider"/> 
				<button>Vider Panier</button>
			</form>

			<a href="payer.php">Payer</a>

			<pre>
			<?php
				if(isset($_SESSION["commande"]))
					print_r($_SESSION["commande"]);
			?>
			</pre>
		</div>
	</body>
</html>