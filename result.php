<?php 

/*var_dump($_POST);*/

	if (empty($_POST['prenom']) && empty ($POST['age'])){
		echo "erreur, remplissez tout les champs";
	}
	else{
			$result = 


			[];	
			foreach ($_POST as $key => $value) {
						$result[$key] = htmlspecialchars($value);
						// $result['nom'] = couchot;
						// $result['prenom'] ....
						// $result
					}		


		}

var_dump($result);


/*		echo
		htmlspecialchars($_POST['nom']) . 
		htmlspecialchars($_POST['prenom']) . 
		htmlspecialchars($_POST['age']);
 }

echo "<script>alert('plop');</script>";

$tab = ['couchot' 'cynthia' '18'];

$tab_assoc = ['nom' => 'couchot',
				'prenom' => 'cynthia',
				'age' => '18'
				];

foreach ($tab_assoc as $key => $value) {
	echo $key . ': ' . $value . '<br>';
}
*/