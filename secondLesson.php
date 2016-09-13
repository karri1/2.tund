<?php

	$age = 5;
	
	if ($age < 18){
		echo "alaealine";
	} else {
		echo "täisealine";
	}

?>

<br>

<?php

	//vanusele vastavalt trükime välja 'palju'
	
	for($i = 1; $i <= $age; $i++){            
		echo $i . " palju ";
	}
	
	echo "õnne!";
?>

<br>

<?php
	echo date("l, j.m.Y, H:i:s")
?>