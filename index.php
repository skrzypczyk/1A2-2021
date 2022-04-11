<?php
require "template/header.php";
?>


<h1>Welcome</h1>

<?php

	if(isConnected()){
		echo "Vous êtes connecté avec l'email ".$_SESSION["email"]. " et votre token : ".$_SESSION["token"] ;
	}
?>


<?php

include "template/footer.php";

?>