<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php

		/*
		//$student = array();
		$student = ["Tom", "Bourlard", 18];
		//echo $student;
		//print_r($student);
		echo "Bonjour ".$student[0]."<br>";

		$student = ["Pierre", "Luc", 22];
		//Afficher Prénom Nom a 22 ans
		//Pierre Luc a 22 ans.
		echo $student[0]." ".$student[1]." a ".$student[2]." ans.";

		$student = [
						"firstname"=>"Pierre", 
						"lastname"=>"Luc", 
						"age"=>22
					];

		echo $student["firstname"]." ".$student["firstname"]." a ".$student["age"]." ans.";

		$student = [
						"firstname"=>["Pierre", "Amid", "Mohamed"], 
						"lastname"=>["Luc", "Toto"], 
						"age"=>22,
						2=>18,
						14
					];

		echo $student[3];

		// Dim : 
		$array = [
					0=>[],
					1=>[
						0=>[
							[],
							[
								[
									[
										[],
										[
											[
												[
													"toto"
												]
											]
										]
									]
								]
							]
						],
						[]
					]
				];
		echo "<pre>";
		print_r($array);
		echo "</pre>";
		echo $array[1][0][1][0][0][1][0][0][0];

		

		$fruits = ["Cerise", "Fraise", "Tomate", "Pomme"];

		echo "<ul>";
		
		foreach ($fruits as $fruit) {
			echo "<li>".$fruit."</li>";
		}
		echo "</ul>";

		*/

		$students= [
						[
							"firstname"=>"Pierre",
							"lastname"=>"Martin",
							"CC"=>[12,10],
							"Partiel"=>13
						],
						[
							"firstname"=>"Jean",
							"lastname"=>"Skrzypczyk",
							"CC"=>[12,10],
							"Partiel"=>8
						]
					];


	?>

	<table border="1px">
		<tr>
			<th>Clé</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Moyenne</th>
		</tr>
		
		<?php
		// pour chaques etudiants mets dans la variable $key la clé et dans $student 
		// l'élève qui correspon à l'itération
		foreach ($students as $key => $student) {

			$totalMark = $student["Partiel"];
			$cptMark = 1;

			foreach ($student["CC"] as $mark)
			{
				$totalMark +=$mark;
				$cptMark++;
			}

			echo '<tr>
					<td>'.$key.'</td>
					<td>'.$student["lastname"].'</td>
					<td>'.$student["firstname"].'</td>
					<td>'.$totalMark/$cptMark.'</td>
				</tr>';
		}






		?>
		
	</table>


</body>
</html>