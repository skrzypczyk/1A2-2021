<?php

require "conf.inc.php";

function connectDB(){

	try{
		$pdo = new PDO( DBDRIVER.":host=".DBHOST.";dbname=".DBNAME.";port=".DBPORT , DBUSER , DBPWD);

		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(Exception $e){
		die("Erreur SQL ".$e->getMessage());
	}


	return $pdo;

}


function isConnected(){

	//Est-ce qu'il y a un token
	if(empty($_SESSION["token"]))
		return false;

	$pdo = connectDB();
	$queryPrepared = $pdo->prepare(
				"SELECT id FROM iw_user 
					WHERE token=:token 
					AND id=:id"
				);

	$queryPrepared->execute([
						"token"=>$_SESSION["token"],
						"id"=>$_SESSION["id_user"]
						]);

	return $queryPrepared->fetch();
}

function createToken($id = null){

	$token = md5(time()*rand(1,1000)."H('DFDF32");

	if(!is_null($id)){

		$pdo = connectDB();

		$queryPrepared = $pdo->prepare("UPDATE iw_user SET token=:token WHERE id=:id");

		$queryPrepared->execute([
								"token"=>$token,
								"id"=>$id
								]);

	}

	return $token;
}


function redirectIfNotConnected(){
	if(!isConnected()){
		header("Location: index.php");
		die();
	}
}














