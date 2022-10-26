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
