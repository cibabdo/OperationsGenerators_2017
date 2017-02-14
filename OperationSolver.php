<?php
class OperationSolver {
	static function solve($operations) {
		$tab_resultats = array();
		foreach ($operations as $op) {						
			$resultat = 0;
			$tab = explode(" ", $op);
			switch($tab[1]) {
				case '+' : $resultat = self::addition($tab[0], $tab[2]); break;
				case '-' : $resultat = self::soustraction($tab[0], $tab[2]); break;
				case '/' : $resultat = self::division($tab[0], $tab[2]); break;
				case '*' : $resultat = self::multiplication($tab[0], $tab[2]); break;
			}			
			$tab_resultats[$op] = $resultat;	
		}
		return $tab_resultats;		
	}
	 
	/*************************************************************************************/	
	
	static function solve_map($operations) {
		$tab_nb1 = array();
		$tab_nb2 = array();
		$tab_nbo = array();		
		foreach ($operations as $op) {	
			$resultat = 0;
			$tab = explode(" ", $op);
			array_push($tab_nb1, $tab[0]); 
			array_push($tab_nbo, $tab[1]);
			array_push($tab_nb2, $tab[2]);
			
		}		
		$tab_eval = array_map("self::evaluer", $tab_nb1, $tab_nbo, $tab_nb2);
		$tab_resultats = array();
		$i=-1;
		foreach ($operations as $op) {	
			$i++;
			$tab_resultats[$op] = $tab_eval[$i];
		}
		return $tab_resultats;	
	}	
	
	/*************************************************************************************/
	
	/* opérations */
	private function addition($nb1, $nb2) {
		return ($nb1 + $nb2);
	}
	private function soustraction($nb1, $nb2) {
		return ($nb1 - $nb2);
	}
	private function division($nb1, $nb2) {
		return ($nb1 / $nb2);
	}
	private function multiplication($nb1, $nb2) {
		return ($nb1 * $nb2);
	}	
	
	/*************************************************************************************/
	
	/* évaluer */
	private function evaluer($nb1, $nbo, $nb2) {
		$resultat = 0;
		switch($nbo) {
			case '+' : $resultat = self::addition($nb1, $nb2); break;
			case '-' : $resultat = self::soustraction($nb1, $nb2); break;
			case '/' : $resultat = self::division($nb1, $nb2); break;
			case '*' : $resultat = self::multiplication($nb1, $nb2); break;
		}
		return $resultat;
	}	
}
?>