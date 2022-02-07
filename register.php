<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Inscription sur le site">
	<title>S'inscrire</title>
</head>
<body>


	<?php

	if(!empty($_SESSION['errors'])){
		print_r($_SESSION['errors']);
		//session_destroy()
		unset($_SESSION['errors']);

	}

	?>

	<form method="POST" action="userAdd.php">
		<input type="email" name="email" placeholder="Votre email" required="required"><br>
		<input type="text" name="firstname" placeholder="Votre prénom"><br>
		<input type="text" name="lastname" placeholder="Votre nom"><br>
		<input type="text" name="pseudo" placeholder="Votre pseudo" required="required"><br>
		<input type="date" name="birthday" placeholder="Votre date de naissance" required="required"><br>
		<select name="country">
			<option value="fr">France</option>
			<option value="pl">Polish</option>
			<option value="dz">Djazair</option>
		</select><br>
		<input type="password" name="pwd" placeholder="Votre mot de passe" required="required"><br>
		<input type="password" name="pwdConfirm" placeholder="Confirmation" required="required"><br>
		<label>
			CGU : <input type="checkbox" name="cgu" required="required"><br>
		</label>

		<input type="submit" value="S'inscire">
	</form>

</body>
</html>