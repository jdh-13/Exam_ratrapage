<?php
// exercice 2 exam php 
//Jérôme De HARO
//Créer une classe « ArrayManager », qui reçoit en constructeur un tableau, possède une
//propriété privée correspondant à ce tableau, un getter et un setter permettant d'y accéder
//en lecture/écriture, et une méthode permettant de renvoyer le nombre le plus grand contenu dans ce tableau.
/**
 * 
 */
class arrayManager
{
	private $tableau;

	//lecture
	public function getTab()
	{
		return $this->tableau;
	}

	// modification
	public function setTab($tableau)
	{
		$this->tableau = $tableau;
	}

	function __construct($tableau)
	{
		$this->tableau = $tableau;
	}

	public function plusGrandNombre()
	{
		$finI = count($this->tableau);

		$GrandNomb = 0;

		for($cpt= 0; i < $finI; $i++)
		{
			$nombreCourant=$this->tableau[$i];

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

}