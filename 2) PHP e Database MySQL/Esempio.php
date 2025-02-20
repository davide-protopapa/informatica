<html>
	<head>
		<title>Primo script in PHP</title>
	</head>
	<body>
		<?php 
		print ("Primo script in PHP <br/>");
		echo "<h1>Ciao a tutti! Buona giornata!</h1>";
		echo "Ciao a tutti", " vi auguro una buona giornata!";
		echo "<br/><h2>Andrea"." Napoli</h2>";
		
		$x1=4;
		$x2=10;
		$somma=$x1+$x2;
		$moltiplicazione=$x1*$x2;
		$divisione=$x1/$x2;
		$sottrazione=$x1-$x2;
		
		echo "La somma di ".$x1." + ".$x2." è = ".$somma;
		echo "<br/>La moltiplicazione di ".$x1." * ".$x2." è = ".$x1*$x2;
		echo "<br/>La divisione di ".$x1." / ".$x2." è = ".$divisione;
		echo "<br/>La sottrazione di ".$x1." - ".$x2." è = ".$x1-$x2;
		
		$oct=0437;
		$esa=0xFAB5;
		
		echo "<br>Il valore ottale è ".decoct($oct);
		echo "<br>Il valore esadecimale è ".dechex($esa);
		
		$vero=TRUE;
		$falso=FALSE;
		
		if (NULL) echo "<br>Ramo vero";
		else echo "<br>Ramo falso";
		
		
		
		
		?>
	
	</body>
</html>