<?php

session_start();

require "functions.php";

//Éviter la faille XSS
//not empty pour les required
//isset pour les non required
//nombre exact

if(
	empty($_POST['email']) ||
	!isset($_POST['firstname']) ||
	!isset($_POST['lastname']) ||
	empty($_POST['pseudo']) ||
	empty($_POST['birthday']) ||
	empty($_POST['country']) ||
	empty($_POST['cgu']) ||
	empty($_POST['pwd']) ||
	empty($_POST['pwdConfirm']) ||
	count($_POST) != 9
){
	die("Tentative de hack ...");
}



//nettoyage des champs
$firstname = ucwords(strtolower(trim($_POST["firstname"])));
$email = strtolower(trim($_POST["email"]));
$pseudo = ucwords(strtolower(trim($_POST["pseudo"])));
$lastname = strtoupper(trim($_POST["firstname"]));
$pwd = $_POST["pwd"];
$pwdConfirm = $_POST["pwdConfirm"];
$country = $_POST["country"];
$cgu =  $_POST["cgu"];
$birthday = $_POST["birthday"];




//vérification des champs un par un
$errors = [];

//Email : format

if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
	$errors[] = "Votre email est incorrect";
}

//Prénom : Min 2 caractères Max 32
if( strlen($firstname)==1 || strlen($firstname)>32){
	$errors[] = "Votre prénom doit faire plus de 2 caractères";
}

//Nom : Min 2 caractères Max 100
if( strlen($lastname)==1 || strlen($lastname)>100){
	$errors[] = "Votre nom doit faire plus de 2 caractères";
}

//Pseudo : Min 6 caractères Max 32
if( strlen($pseudo)<6 || strlen($pseudo)>32){
	$errors[] = "Votre pseudo doit faire plus de 6 caractères";
}

//pwd : Min 8 caractères
if( strlen($pwd)<8 ){
	$errors[] = "Votre mot de passe doit faire plus de 7 caractères avec une minuscule, une majuscule et un chiffre";
}

//Pwd confirm = pwd
if($pwd != $pwdConfirm){
	$errors[] = "Votre mot de passe de confirmation ne correspond pas";
}


//Country : soit fr, pl, dz
$countryAuthorized = ["fr", "pl", "dz"];
if( !in_array($country, $countryAuthorized) ){
	$errors[] = "Votre pays est nok";
}

//birthday : > 13 et < 100 et format valide

//echo $birthday; //2022-12-31

$birthdayExploded = explode("-", $birthday);

if( count($birthdayExploded)!=3 || !checkdate($birthdayExploded[1], $birthdayExploded[2], $birthdayExploded[0]) ){
	$errors[] = "Date de naissance incorrecte";
}else{

	$age = (time() - strtotime($birthday))/60/60/24/365.25;
	if($age<13 || $age>100){
		$errors[] = "Vous êtes trop jeune ou trop vieux";
	}
}


if( count($errors) == 0){
	
	$pdo = connectDB();

	//PDO voit qu'il n'y a qu'une seule requête
	$queryPrepared = $pdo->prepare("INSERT INTO iw_user (email, firstname, pwd,  lastname, pseudo, country, birthday) VALUES (:email, :firstname, :pwd,  :lastname, :pseudo, :country, :birthday)");


	$queryPrepared->execute([
								"email"=>$email,
								"firstname"=>$firstname,
								"pwd"=>$pwd,
								"lastname"=>$lastname,
								"pseudo"=>$pseudo,
								"country"=>$country,
								"birthday"=>$birthday
							]);
	

	header("Location: index.php");

}else{
	$_SESSION['errors'] = $errors;
	header("Location: register.php");
}







