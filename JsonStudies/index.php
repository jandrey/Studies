<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Notable" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri|Notable" rel="stylesheet">
<style>
body{
	//font-family: 'Notable', sans-serif;
	font-family: 'Hind Siliguri', sans-serif;
	background-color: lightblue
	color: white;
}
.main { 
		text-align: center;

	}
</style>

<head>
    <title>ESTUDOS JSON & AJAX</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 main">
            <h1>Json & Ajax Studies</h1>
			 <?php
				//String no formato JSON
				$string_json = file_get_contents('text.json');
				 
				//Decodificação pela função json_decode
				$objeto_php = json_decode($string_json);
				 
				//Manipulando o objeto decodificado
				echo "O nome é: ".$objeto_php->Nome;
				echo "<br />";
				echo "Sua idade é: ".$objeto_php->Idade;
			?>
			<form action="">
				Name: <input type="text" name="name"><br>
				Idade: <input type="text" name="num"><br>
				<input type="submit" value="Submit">
			</form>
        </div>
    </div>
</div>
</body>
</html>