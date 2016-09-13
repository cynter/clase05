<html>
<head>
	<title></title>
</head>
<body>

	<?php 

function leer(){
		$file = fopen("archivo.txt", "r");

		$contador = array();
		$contador[0]=0;
		$contador[1]=0;
		$contador[2]=0;
		$contador[3]=0;
		$contador[4]=0;



		while(!feof($file)) {
			$reglon =fgets($file);
			$palabras=explode(" ",$reglon);

			foreach ($palabras as $palabra ) {
				$cantidad = strlen($palabra);


				switch ($cantidad) {
					case '1':
						$contador[0]+=1;
						break;

					case '2':
						$contador[1]+=1;
						break;

					case '3':
						$contador[2]+=1;
						break;

					case '4':
						$contador[3]+=1;
						break;
					
					default:
						$contador[4]+=1;
						
						break;
				}
			}

			//var_dump($contador);
		}
		echo "<table>";
			for($a=0; $a < 5; $a++) { 
				echo "<tr>";

					echo "<td> Cantidad de palabras ".($a+1) ."letras".$contador[$a]."</td>";

				echo "</tr>";

			}
		echo "</table>";

		fclose($file);	
}

leer();

	 ?>

</body>
</html>