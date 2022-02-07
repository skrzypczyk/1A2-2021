<?php

header("Content-Type: image/png");

$image = imagecreate(300, 200);


$back = imagecolorallocate($image, rand(0,100), rand(0,100), rand(0,100));


$char = "abcdefghijklmnopqrstuvwxyz0123456789";
$char = str_shuffle($char);
$captcha = substr($char, 0, rand(6,8));

$listOfFonts = glob("font/*.ttf");


//imagestring($image, 5, 150, 100, $captcha, $white);

$x = rand(30,35);

for($cpt = 0; $cpt < strlen($captcha); $cpt++){

	//echo $captcha[$cpt];

	$colors[] = imagecolorallocate($image, rand(150,250), rand(150,250), rand(150,250));

	imagettftext($image, rand(20,30), rand(-35, 35), $x, rand(75,125), $colors[$cpt], $listOfFonts[array_rand($listOfFonts)], $captcha[$cpt]);

	$x += rand(30,35);

}


$countGeometry = rand(5,7);

for($cpt=0; $cpt<$countGeometry; $cpt++){

$geometry = rand(0,2);

	switch ($geometry) {
		case 0:
			imageline($image, rand(0,300), rand(0,200), rand(0,300), rand(0,200), $colors[array_rand($colors)]);
			break;
		case 1:
			imagerectangle($image, rand(0,300), rand(0,200), rand(0,300), rand(0,200), $colors[array_rand($colors)]);
			break;
		default:
			imageellipse($image, rand(0,300), rand(0,200), rand(0,300), rand(0,200), $colors[array_rand($colors)]);
			break;
	}

}


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