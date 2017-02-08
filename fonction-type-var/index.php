<?php
	class Chat {}
	
	class Chien {}

	class Animalerie {
		function __construct(Chat $chat, Chien $chien){
			
			echo 'Executer';
		}
	}
	new Animalerie(
		new Chat(), //si : new Chien(), =>msg: Catchable fatal error: Argument 1 passed to Animalerie::__construct() must be an instance of Chat, instance of Chien given, called in 

		new Chien()
	);
?>