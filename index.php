<?php
if (isset($_POST["calcola"])) 
{
	$giorni = $_POST["giorni"];
	$ore_giornaliere = $_POST["ore_giornaliere"];
	$compenso_orario = $_POST["compenso_orario"];

    $guadagno = $giorni*$ore_giornaliere*$compenso_orario;

    if ($ore_giornaliere == 0 || $compenso_orario == 0)
    {
    	echo "<script> alert('Attenzione, inserire un numero maggiore di 0!'); </script>";
    }

    else
    {
    	echo "Guadagnerai $guadagno€ lavorando $giorni giorni al compenso di $compenso_orario€/h";
    }
} 

?>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="background">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<p class="title"><b>Quanto sarai povero?</b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<p class="paragraph"><b>Giorni</b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<input type="text" name="durata_lavoro" class="text_box" placeholder="Quanti giorni durerà il lavoro?">
			</div>

		<div class="row">
			<div class="col-12">
				<hr class="linea">
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<p class="campo_obbligatorio"><b>Campo obbligatorio</b></p>
			</div>
		</div>




<div class="row">
			<div class="col-12">
				<p class="paragraph"><b>Ore giornaliere di lavoro</b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<input type="text" name="durata_lavoro" class="text_box" placeholder="Quanto lavori al giorno?">
			</div>

		<div class="row">
			<div class="col-12">
				<hr class="linea">
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<p class="campo_obbligatorio"><b>Campo obbligatorio</b></p>
			</div>
		</div>






		<div class="row">
			<div class="col-12">
				<p class="paragraph"><b>Compenso orario</b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<input type="text" name="durata_lavoro" class="text_box" placeholder="Quanto verrai pagato all'ora?">
			</div>

		<div class="row">
			<div class="col-12">
				<hr class="linea">
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<p class="campo_obbligatorio"><b>Campo obbligatorio</b></p>
			</div>
		</div>



</body>
</html>