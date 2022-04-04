<?php
	session_start();
	require "functions.php";
?>

<?php

	include "template/header.php";

	if(count($_POST) == 2 && !empty($_POST['email']) && !empty($_POST['pwd']) ){
		

		$email = strtolower(trim($_POST["email"]));
		$pwd = $_POST['pwd'];


		//Se connecter à la bdd
		$pdo = connectDB();

		//Donne moi le user qui a l'email = $email
		$queryPrepared = $pdo->prepare("SELECT * FROM iw_user WHERE email=:email");
		$queryPrepared->execute([
									"email"=>$email
								]);
		$result = $queryPrepared->fetch();

		//Si aucun résultat = NOK

		//Si il y a un résultat récupère le mot de passe crypté

		//Est-ce que le mot de passe crypté en bdd correspond au mot de passe que
		// l'utilisateur vient de saisir

		//Si oui -> Il est connecté

		//Sinon  -> Nok


	}

?>

	<div class="row m-4">
		<div class="col-4"></div>
		<div class="col-4">
			<h1>Se connecter</h1>


			<form method="POST" action="">

				<input class="form-control" type="email" name="email" required="required">
				<input class="form-control" type="password" name="pwd" required="required">
				<input class="form-control" type="submit" value="Se connecter">

			</form>

		</div>
	</div>


<?php

include "template/footer.php";

?>