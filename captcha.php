<?php

header("Content-Type: image/png");

$image = imagecreate(300, 200);


$back = imagecolorallocate($image, rand(0,100), rand(0,100), rand(0,100));
$white = imagecolorallocate($image, 255, 255, 255);

$char = "abcdefghijklmnopqrstuvwxyz0123456789";
$char = str_shuffle($char);
$captcha = substr($char, 0, rand(6,8));

imagestring($image, 5, 150, 100, $captcha, $white);


/*

	Consignes : 
		- Création d'un dossier fonts contenant 3 polices de votre choix au format ttf (dafont)
		- Fond aléatoire
		- Texte :
			-> Couleur aléatoire par caractère
			-> Taille aléatoire par caractère
			-> Angle aléatoire par caractère
			-> Position aléatoire par caractère
			-> Font aléatoire par caractère (Attention si j'ajoute une police dans le dossier font elle doit être prise en compte sans modifier le code)
		- Des formes aléatoires derrière les caractères avec des couleurs dé jà utilisé es (Nb
aléatoire)
		- Attention ) la lisibilité


*/




imagepng($image);