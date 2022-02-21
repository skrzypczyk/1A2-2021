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
