<?php
require "template/header.php";
?>


<h1>Welcome</h1>

<?php

	if(isConnected()){
		echo "Vous êtes connecté avec l'email ".$_SESSION["email"]. " et votre token : ".$_SESSION["token"] ;




	?>

	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Email</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Date de naissance</th>
				<th>Pays</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$pdo = connectDB();
				
				$query = $pdo->query("SELECT * FROM iw_user");
				$results = $query->fetchAll();

				foreach($results as $user)
				{
					?>

						<tr>
							<td><?php echo $user["id"]?></td>
							<td><?php echo $user["email"]?></td>
							<td><?php echo $user["lastname"]?></td>
							<td><?php echo $user["firstname"]?></td>
							<td><?php echo $user["birthday"]?></td>
							<td><?php echo $user["country"]?></td>
							<td>
								<div class="btn-group">
									<a href="#" class="btn btn-warning">Modifier</a>
									<a href="userDel.php?id=<?php echo $user["id"]?>" class="btn btn-danger">Supprimer</a>
								</div>

							</td>
						</tr>

					<?php

				}


			?>





		</tbody>
	</table>


<?php
	}
?>


<?php

include "template/footer.php";

?>