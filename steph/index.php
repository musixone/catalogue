<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.css" />
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <link type="text/css" rel="stylesheet" href="font-awesome.css" />
    <link type="text/css" rel="stylesheet" href="css/grid.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Exo 7 php</title>
  </head>
  <body>
      <h1>Menu stylé magueule</h1>
      <span>Putain c'est pas avec un h1 pareil que le referencement sera top !</span>
      <div>
      <form class="form1">
        <ul>
          <li>Item 1 <select class="select" name="Item1"><option>0</option><option>1</option></select> </li>
          <li>Item 2  <select class="select" name="Item2"><option>0</option><option>1</option></select></li>
          <li>Item 3  <select class="select" name="Item3"><option>0</option><option>1</option></select></li>
          <li>Item 4  <select class="select" name="Item4"><option>0</option><option>1</option></select></li>
        </ul>
        <button>VALIDE</button>
      </form>
     <a class="button" href="index2.php" >Accédez à votre panier!</a>
      </div>
  </body>
  <script type="text/javascript"></script>
</html>
<?php
include("catalog.class.php");
session_start();
 $catalogue= new Catalog();
 $catalogue->addItem("Item1","299");
 $catalogue->addItem("Item2","700");
 $catalogue->addItem("Item3","3000");
 $catalogue->addItem("Item4","10000");
 $item1=$catalogue->getItem("Item1");
 $item2=$catalogue->getItem("Item2");
 $item3=$catalogue->getItem("Item3");
 $item4=$catalogue->getitem("Item4");

 echo '<pre> <br/>';
 print_r($catalogue->getItem());
 echo '<br/></pre>';
 echo '<br/>';
 $panier = new Command();
 //echo("le total de votre commande est :".$panier->prixTotal()."€"); // on affiche le total de notre liste
 if(isset($_GET['Item1']) && $_GET['Item1'] > 0){$panier->addOnList($item1);} // si input>0, on ajoute dans notre panier
 if(isset($_GET['Item2']) && $_GET['Item2'] > 0){$panier->addOnlist($item2);}
 if(isset($_GET['Item3']) && $_GET['Item3'] > 0){$panier->addOnList($item3);}
 if(isset($_GET['Item4']) && $_GET['Item4'] > 0){$panier->addOnList($item4);}
 $_SESSION['panier'] = $panier->getList();//stock dans 'panier' ma list Item
 $_SESSION['total']= $panier->prixTotal();//stock dans 'total' mon prix total
?>  

<!--
  <input type="text" value="0" name="Item1"/>
<input type="text" value="0" name="Item2"/>
  <input type="text" value="0" name="Item3"/>
<input type="text" value="0" name="Item4"/>
 -->