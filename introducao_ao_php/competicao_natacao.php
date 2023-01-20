
<?php 

	$categorias = [];
	$categorias[0] = 'infantil';
	$categorias[1] = 'adolecente';
	$categorias[2] = 'adultos';
	$categorias[3] = 'idoso';
	
	$nome = 'Fernando';
	$idade = 23;
	
	// print_r($categorias);           Array ( [0] => infantil [1] => adolecente [2] => adultos [3] => idoso )
	// var_dump ($nome);               string(7) "eduardo"
	// var_dump ($idade);              int(8)
	
	if(($idade >=6)&&($idade <=12) ){
		echo "nadador ".$nome. " compete na categoria ".$categorias[0];
	}
	else if($idade <=18){
		echo "nadador ".$nome. " compete na categoria ".$categorias[1];
	}
	else if($idade <=50){
		echo "nadador ".$nome. " compete na categoria ".$categorias[2];
	}
	else{
		echo "nadador ".$nome. " compete na categoria ".$categorias[3];
	}
	
?>