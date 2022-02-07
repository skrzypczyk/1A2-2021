<?php



//Éviter la faille XSS
//not empty pour les required
//isset pour les non required
//nombre exact

print_r($_POST);



//nettoyage des champs
$firstname = ucfirst(strtolower(trim($_POST["firstname"])));


//vérification des champs un par un
$errors = [];

//Email : format

//Prénom : Min 2 caractères Max 32

//Nom : Min 2 caractères Max 100

//Pseudo : Min 6 caractères Max 32

//pwd : Min 8 caractères

//Pwd confirm = pwd

//Country : soit fr, pl, dz

//birthday : > 13 et < 100 et format valide




print_r($errors);
