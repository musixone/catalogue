<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Catalog</title>
    <style>
		body{font-family:Arial, Helvetica; margin-top:20px;}
		form{background:lightgrey; padding:10px; border:1px solid grey}
		table{background:lightblue}
		td{width:350px; height:150px; padding:20px; border: 1px solid grey}
		.article{color:black; font-size:20px; font-weight:bold}
		button{float:right;margin-right:20px}
	</style>
  </head>
  <body>
  
<?php
	session_start();
	include_once('catalog.class.php');
	include_once('commande.class.php');
	$cat = new Catalog();
	$cat->addItem("Pantalon","001","Jean bleu coton",15);
	$cat->addItem("Pantalon","002","Jean gris Levis",25);
	$cat->addItem("Chemise","003","Coton maillé - coloris blanc",19);
	$cat->addItem("Pull","004","laine woolmark - coloris bleu",35);
	$cat->addItem("Pull","005","Acrylique made in china",12);
	$cat->addItem("Chaussures","006","Dessus cuir - semelle élastomere - coloris noir",79);
	echo"<pre>";
    echo'<br><b>**** LISTE DES ARTICLES ****</b><br>';
	print_r($cat->getCatalog());

	echo'<br><br><b>**** MISE A JOUR ARTICLES ****</b><br>';
	$cat->getItem("001")->setDesc("pantalon maj description blabla");		
	$cat->getItem("001")->setPrix(30);	
	$cat->getItem("006")->setPrix(99);	
	print_r($cat->getItem('001'));	
	print_r($cat->getItem('006'));	
	
	echo'<br><b>**** RECHERHE ARTICLES (S) (par réf ou par nom) ****</b><br>';
	//print_r($cat->getItem());	 //renvoie le tableau (param à false)
	print_r($cat->getItem('Pantalon'));	  
	echo"</pre>";
/*	echo "Réf 001 : ".$cat->getItem('001')->getNom()."</br>";
	echo "Réf 006 : ".$cat->getItem('006')->getNom()."</br>";*/

	$panier = new Commande();
	
?>

<div class="contenair">
<b>LA JEDOUTE</b>
	<table>
		<tr>
			<td>
				<form method="GET" action="index.php">
					<u><?php echo 'Réf : '.$cat->getItem('001')->getRef(); ?>	</u>			
					<br /><br />
					<span class="article">
						<?php echo $cat->getItem('001')->getNom();  ?><br />
					</span>
					<?php echo $cat->getItem('001')->getDesc(); ?><br />
					<?php echo $cat->getItem('001')->getPrix().' €'; ?><br />
					<br />
					<span>
						<select>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select>
					</span>
					<input type="hidden" name="btn1" value="001" />
					<!--<input type="submit" value="Ajouter au panier" name="btn1" />-->
					<button>Ajouter au panier</button>
				</form>
			</td>
			<td>
				
				<u><?php echo 'Réf : '.$cat->getItem('002')->getRef(); ?></u>
				
				<br /><br />
				<span class="article">
					<?php echo $cat->getItem('002')->getNom();  ?><br />
				</span>
				<?php echo $cat->getItem('002')->getDesc(); ?><br />
				<?php echo $cat->getItem('002')->getPrix().' €'; ?><br />
				<br />
				<span>
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</span>
				<button>Ajouter au panier</button>
			</td>
			<td>
				<u><?php echo 'Réf : '.$cat->getItem('003')->getRef(); ?></u>
				
				<br /><br />
				<span class="article">
					<?php echo $cat->getItem('003')->getNom();  ?><br />
				</span>
				<?php echo $cat->getItem('003')->getDesc(); ?><br />
				<?php echo $cat->getItem('003')->getPrix().' €'; ?><br />
				<br />
				<span>
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</span>
				<button>Ajouter au panier</button>
			</td>			
	
		</tr>
		<tr>
			<td>		
				<u><?php echo 'Réf : '.$cat->getItem('004')->getRef(); ?>	</u>			
				<br /><br />
				<span class="article">
					<?php echo $cat->getItem('004')->getNom();  ?><br />
				</span>
				<?php echo $cat->getItem('004')->getDesc(); ?><br />
				<?php echo $cat->getItem('004')->getPrix().' €'; ?><br />
				<br />
				<span>
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</span>
				<button>Ajouter au panier</button>
			</td>
			<td>
				
				<u><?php echo 'Réf : '.$cat->getItem('005')->getRef(); ?></u>
				
				<br /><br />
				<span class="article">
					<?php echo $cat->getItem('005')->getNom();  ?><br />
				</span>
				<?php echo $cat->getItem('005')->getDesc(); ?><br />
				<?php echo $cat->getItem('005')->getPrix().' €'; ?><br />
				<br />
				<span>
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</span>
				<button>Ajouter au panier</button>
			</td>
			<td>
				<u><?php echo 'Réf : '.$cat->getItem('006')->getRef(); ?></u>
				
				<br /><br />
				<span class="article">
					<?php echo $cat->getItem('006')->getNom();  ?><br />
				</span>
				<?php echo $cat->getItem('006')->getDesc(); ?><br />
				<?php echo $cat->getItem('006')->getPrix().' €'; ?><br />
				<br />
				<span>
					<select>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
				</span>
				<button>Ajouter au panier</button>
			</td>
		</tr>		
	<br />
	</table>
</div>

  </body>
  <script type="text/javascript"></script>
</html>