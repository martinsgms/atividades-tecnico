<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
	<title>tabuada</title>
<style>
*{font-family: sans-serif;}

body{background-color: #8b0000;}

form{ 
	background-color: #fff;
	border-radius: 10px;
	padding: 2px;
	margin-left: 30%;
	margin-right: 30%;
	margin-top: 20px;
}

div{
	background-color: #fff;
	border-radius: 10px;
	padding: 5px;
	margin-top: 20px;
	width: 100px;
	margin-left: 45%;
	margin-right: 30%;
}

p{
	text-align: center;
}
</style>


</head>

<body>
	<h1 style="color: #fff; text-align: center;">Tabuada</h1>
	<hr>

	<form name="form1" method="post" action="">
		<p><label for="tab">Digite a tabuada desejada</label><br>
		<input type="number" name="tab" id="tab" required>

		<input type="submit" name="calc" value="Enviar" style="cursor:hand;"><p>
	</form>

	<div>

	<?php
	
		$t = $_POST['tab'];
		echo "<p>";

		/* for é usado quando se sabe o valor final
		for ($i=0; $i <=10 ; $i++) { 
			echo  $t. " x " . $i . " = " . ($t * $i) . "<br>";
		}
		*/
		$i = 0;
		while ($i<= 10) {
			echo  $t. " x " . $i . " = " . ($t * $i) . "<br>";	
			$i++;
		}
		echo "</p>";

	?>
	</div>

</body>

</html>