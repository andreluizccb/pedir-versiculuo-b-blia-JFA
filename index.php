<?php
 extract($_POST);

 function versiculo(){
 	$jfa = file('biblia.txt');
 	$min=0;
 	$max = count($jfa)-1;
 	$i = rand($min,$max);
 	echo utf8_encode($jfa[$i]);
 }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VERSICULO BIBLIA JFA</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			display: grid;
			justify-content: center;
			text-align: center;
			background: #cecece;
		}
		h1{
			font-size: 17px;
			font-family: 'Trebuchet MS';
		}
		div{
			width: 370px;
		}
		input[type='submit']{
			margin-top: 10px;
			margin-bottom: 10px;
			padding: 5px;
		}
		input[type='submit']:hover{
			cursor: pointer;
		}
		.conteudo{
			padding:10px;
		}
	</style>
</head>
<body>
	<div class="conteudo">
		<h1>Toda honra e toda gloria seja dada a Deus</h1>
		<div>
			<form action="index.php" method="post">
			    <div>
				    <input type="submit" name="btn" value="Pedir Versiculo">
			    </div>
		    </form>
	    </div>
	   <div>
		    <?php
	 	        if(isset($_POST['btn'])){
	 		        versiculo();
	 	        }
	 	    ?>
	    </div>
    </div>	
</body>
</html>