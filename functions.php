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

	echo $lastname;



	function cleanFirstname($firstname){

		//???

		return $firstname;
	}


	?>

</body>
</html>