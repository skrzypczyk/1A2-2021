<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ma première page</title>
	<meta name="description" content="Ceci est ma première page">
</head>
<body>

	<?php

		/*
			Une variable est auto-déclarante
			elle est aussi auto-typée et elle est
			dynamique
			Convention :
			- Camel Case
			- Anglais
			- Cohérence

		*/

		$myFirstname = "Yves";

		/*
			Types :
			-> Float (1.4)
			-> String "" ou ''
			-> integer 1
			-> Boolean true ou false
			-> Null : null

		*/
		$myLastname;

		/*
			Opérateurs : + - * / %
		*/ 

		/*
			Incrémentation et Décrémentation
		*/
		$cpt = 1;

		echo $cpt; //1
		// ++$cpt --> $cpt = $cpt+1
		echo ++$cpt; //2
		echo $cpt++; //2
		echo $cpt; //3


		/*
			Conditions
			Si l'age est sup à 18 afficher "Majeur"
			Sinon si l'age est = à 18 afficher "Tout juste majeur"
			Sinon si l'age est inf à 18 afficher "Mineur"
		
			0 == "" //VRAI
			0 == false //VRAI
			3 == true // VRAI 
			0 == null // VRAI
			null == "" //VRAI
			"test" == true //VRAI
		*/
		
		$age = "18";

		if( $age > 18 ) echo "Majeur";
		elseif( $age === 18 ) echo "Tout juste majeur";
		elseif( $age < 18 ) echo "Mineur";
		

		$scope = "1";

		switch ($scope) {
			case '4':
				echo "Peut supprimer";
			case '3':
				echo "Peut ecrire";
			case '2':
				echo "Peut copier";
			default:
				echo "Peut lire";
				break;
		}


		/*
			Condition ternaire
		*/
		$age = 13;
		if($age<18){
			echo "mineur";
		}else{
			echo "majeur";
		}

		// instruction (condition)?vrai:faux;
		echo ($age<18)?"mineur":"majeur";

		$age = 13;
		if($age<18){
			$majeur = false;
		}else{
			$majeur = true;
		}

		$majeur = ($age<18)?false:true;


		//Le null coalescent

		$firstname = null;

		// SI la variable n'est pas null
		// on la retourne sinon on retour "anonyme"
		echo $firstname??"anonyme";

		echo ($firstname == null)?"anonyme":$firstname;

		if($firstname == null){
			echo "Anonyme";
		}else{
			echo $firstname;
		}


		//Simplification des conditions


		$adult = null;

		if($adult){
			echo "Majeur";
		}else{
			echo "Mineur";
		}

	?>

</body>
</html>