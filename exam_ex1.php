<?php
// exercice 1 exam php 
//Jérôme De HARO 
//l’algorithme affichant à l’écran la plus grande valeur de ce tableau.

function LePlusGrandNombre($Tab)
{
	//index
	$i;
	//taille du tableau
	$finI;
	//le plus grand nombre
	$GrandNomb =0;
	// le nombre courant 
	$NombreCourant;

	$finI= count($Tab);

	
	for($i=0;i<$finI;$i++)
	{
		$NombreCourant=$Tab[$i];

		if($i=0)
		{
			$GrandNomb=$NombreCourant;
		}

		if ($NombreCourant>=$GrandNomb) 
		{
			$GrandNomb=$NombreCourant;
		}
	}

	return $GrandNomb;
}