<?php
// exercice 1 exam php 
//Jérôme De HARO 
//l’algorithme affichant à l’écran la plus grande valeur de ce tableau.

function LePlusGrandNombre($Tab)
{
	//index
	$cpt;
	//taille du tableau
	$finI;
	//le plus grand nombre
	$grandNomb = 0;
	// le nombre courant 
	$nombreCourant;

	$finI = count($Tab);

	
	for($cpt = 0; $cpt < $finI; $cpt++)
	{
		$nombreCourant = $Tab[$cpt];

		if($i = 0)
		{
			$grandNomb = $nombreCourant;
		}

		if ($nombreCourant >= $grandNomb) 
		{
			$grandNomb = $nombreCourant;
		}
	}

	return $grandNomb;
}