<?php
	session_start();
?>

<?php

include "template/header.php";

?>

	<?php

	if(!empty($_SESSION['errors'])){
		print_r($_SESSION['errors']);
		//session_destroy()
		unset($_SESSION['errors']);

	}

	?>


	<div class="row m-4">
		<div class="col-2"></div>
		<div class="col-8">


			
			<form method="POST" action="userAdd.php">
				<input class="form-control" type="email" name="email" placeholder="Votre email" required="required"><br>
				<input class="form-control" type="text" name="firstname" placeholder="Votre prénom"><br>
				<input class="form-control" type="text" name="lastname" placeholder="Votre nom"><br>
				<input class="form-control" type="text" name="pseudo" placeholder="Votre pseudo" required="required"><br>
				<input class="form-control" type="date" name="birthday" placeholder="Votre date de naissance" required="required"><br>
				<select class="form-control" name="country">
					<option value="fr">France</option>
					<option value="pl">Polish</option>
					<option value="dz">Djazair</option>
				</select><br>
				<input class="form-control" type="password" name="pwd" placeholder="Votre mot de passe" required="required"><br>
				<input class="form-control" type="password" name="pwdConfirm" placeholder="Confirmation" required="required"><br>
				
				<label>
					CGU : <input type="checkbox" name="cgu" required="required"><br>
				</label>

				<input class="form-control" type="submit" value="S'inscire">
			</form>
		</div>
	</div>

	

<?php

include "template/footer.php";

?>