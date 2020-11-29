<?php 
	if(isset($_POST['btnEnviar'])){
		$tipo = $_POST['optionsRadios'];
		$consumo = $_POST['consumo'];
		$consumo2 = $_POST['consumo'];
		$total = 0;

		echo "Su total a pagar es:<br>";

		if ($tipo == 'option1') {
			if ($consumo <= 50) {
				$total = $consumo * 3.50;
				$consumo = $consumo - $consumo; 
				echo "Para los primeros 50 Kw $3.50/Kw<br>" ;
				echo "Total: $total";
			}elseif ($consumo <=150) {
				$total = 50 * 3.50;
				$consumo = $consumo - 50;
				echo "Para los primeros 50 Kw $3.50/Kw<br>";
				$total = $total + $consumo * 4;
				$consumo = $consumo - $consumo;
				echo "Para los siguientes 100 Kw $4/Kw<br>";
				echo "Total: $total";
			}elseif ($consumo <=250) {
				$total = 50 * 3.50;
				$consumo = $consumo - 50;
				echo "Para los primeros 50 Kw $3.50/Kw<br>";
				$total = $total + 100 * 4;
				$consumo = $consumo - 100;
				echo "Para los siguientes 100 Kw $4/Kw<br>";
				$total = $total + $consumo * 5.20;
				$consumo = $consumo - $consumo;
				echo "Para los siguientes 100 Kw $5.20/Kw<br>";
				echo "Total: $total";
			}elseif ($consumo > 250) {
				$total = 50 * 3.50;
				$consumo = $consumo - 50;
				echo "Para los primeros 50 Kw $3.50/Kw<br>";
				$total = $total + 100 * 4;
				$consumo = $consumo - 100;
				echo "Para los siguientes 100 Kw $4/Kw<br>";
				$total = $total + 100 * 5.20;
				$consumo = $consumo - 100;
				echo "Para los siguientes 100 Kw $5.20/Kw<br>";
				$total = $total + $consumo * 6.50;
				$consumo = $consumo - $consumo;
				echo "Para Kw por encima de 250 Kw $6.50/Kw<br>";
				echo "Total: $total";
			}

		} else {
			if ($consumo <= 50) {
				$total = $consumo * 3.80;
				$consumo = $consumo - $consumo;
				echo "Para los primeros 50 Kw $3.80/Kw<br>" ;
				echo "Total: $total";
			}elseif ($consumo <=150) {
				$total = 50 * 3.80;
				$consumo = $consumo - 50;
				echo "Para los primeros 50 Kw $3.80/Kw<br>";
				$total = $total + $consumo * 4.50;
				$consumo = $consumo - $consumo;
				echo "Para los siguientes 100 Kw $4.50/Kw<br>";
				echo "Total: $total";
			}elseif ($consumo <=250) {
				$total = 50 * 3.80;
				$consumo = $consumo - 50;
				echo "Para los primeros 50 Kw $3.80/Kw<br>";
				$total = $total + 100 * 4.50;
				$consumo = $consumo - 100;
				echo "Para los siguientes 100 Kw $4.50/Kw<br>";
				$total = $total + $consumo * 5.80;
				$consumo = $consumo - $consumo;
				echo "Para los siguientes 100 Kw $5.80/Kw<br>";
				echo "Total: $total";
			}elseif ($consumo > 250) {
				$total = 50 * 3.80;
				$consumo = $consumo - 50;
				echo "Para los primeros 50 Kw $3.80/Kw<br>";
				$total = $total + 100 * 4.50;
				$consumo = $consumo - 100;
				echo "Para los siguientes 100 Kw $4.50/Kw<br>";
				$total = $total + 100 * 5.80;
				$consumo = $consumo - 100;
				echo "Para los siguientes 100 Kw $5.80/Kw<br>";
				$total = $total + $consumo * 7.50;
				$consumo = $consumo - $consumo;
				echo "Para Kw por encima de 250 Kw $7.50/Kw<br>";
				echo "Total: $total";
			}
		}

		echo " PESOS.";
	}

	
 ?>