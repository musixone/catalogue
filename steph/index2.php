<?php
include("catalog.class.php");
include_once("commande.class.php");
$listItem="";
	session_start();
	echo "je suis une deuxieme page !<br/>voici le contenu de votre panier ! : <br/><pre>";
	print_r($_SESSION['panier']);
	echo '</pre>';
	echo '<br/> voici maintenant le total de votre commande :<br/>'.$_SESSION['total'].'€';
	//echo "le total de votre commande est :".$_SESSION['panier']->prixTotal()."€";

	echo'<br/><a href="index.php">RETOUR PAGE INDEX.PHP </a>';
?>
