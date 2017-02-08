<?php

include_once('items.class.php');

class Catalog{
	
	private $items = []; 
	
	function __construct(){		
	}
	
	function getCatalog(){	
            return $this->items;
	}
}


?>
