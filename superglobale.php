<?php

/*

	- Accessible partout
	- Non modifiable (mauvase pratique)
	- Créé et modifié par le serveur
	- syntaxe commence toujours par $_ et en majuscule
	- array

*/
//echo "<pre>";
//print_r($_SERVER);

//setcookie("pseudo", "Prof");
//echo "Bonjour ".$_COOKIE['pseudo'];


	session_start();

	$_SESSION["login"] = true;
	$_SESSION["email"] = "y.skrzypczyk@gmail.com";








