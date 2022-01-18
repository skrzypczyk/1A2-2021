<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php


	function helloWorld(){

		echo "Bonjour";

	}

	//helloWorld();


	$firstname = "yves";


	function helloYou($firstname){
		//va chercher la variable globale firstname
		//global $firstname;
		//echo "Bonjour " . $firstname;
	}


	helloYou($firstname);




	$lastname = "  SKrzYPczYK   ";

	function cleanLastname($lastname){
		$lastname = trim($lastname);
		$lastname = strtoupper($lastname);// String to Upper
		return $lastname;
	}

	$lastname = cleanLastname($lastname);

	//echo $lastname;



	//$firstname pointe sur une mémoire 046233543243
	$firstname = "   Jean pierre   ";


	//$firstnameToClean pointe sur une mémoire 046233543243
	function cleanFirstname(&$firstnameToClean){

		$firstnameToClean = trim($firstnameToClean);
		$firstnameToClean = ucwords(strtolower($firstnameToClean));

	}

	cleanFirstname($firstname);

	//echo $firstname;




	function helloComplete($firstname,$lastname="Anonyme"){
		echo "Bonjour ".$firstname." ".$lastname;
	}


	$firstname = "yves";
	$lastname = "Skrzypczyk";

	helloComplete($firstname, $lastname);

	helloComplete($firstname);


	?>

</body>
</html>