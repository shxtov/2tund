<?php

	// $ - pridaem znachenie

	$firstName = "Vlad";
	$lastName = "Šutov";
	
	// echo trükib välja muutuja väärtuse
	
	//echo $firstName;
	//echo $lastName;
	
	//echo s probelom (ispolzujutsa . dlja "slozhenija" string)
	
	echo $firstName." ".$lastName;
	
?>

<br>

<?php

	$age = 5;
	
	if ($age < 18){
		
		//kui vastus on tõene
		echo "alaealine";
		
	} else {
		
		//kui vastus on väär
		echo "täisealine";
		
	}

?>

<br>

<?php

 	//tsüklid for() - kolm asja sulgudesse 1. enne 1 korda ($i = 0), 2. enne igat korda ($i < $age), 3. pärast igat korda ($i = $i + 1)
	
	for($i = 1; $i <= $age; $i = $i + 1){
		
		echo $i."palju ";
		
		
	}
	
	echo "õnne!"

?>

<br>

<?php

	echo date("l, d M Y. H:i:s");

?>