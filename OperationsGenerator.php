<?php
class OperationsGenerator {
	public $operators = array();
	private $operations = array();
	 
	/* SET */
	public function genererOperations($nb) {	
		for($i=0 ; $i<$nb ; $i++) {		
			// on détermine les 2 nombres et l'opérateur
			$nb1 = rand(0,100);
			$nb2 = rand(0,100);
			$operateur = rand(1,4);			
			
			// valider l'opération						
			if ($operateur == "4" && $nb2 == 0) $operateur = rand(1,3);
			
			// mise à jour des tableaux
			switch($operateur) {
				case '1' : 
					$this->ajouterAddition(); 
					array_push($this->operations, ($nb1 . ' + ' . $nb2)); 
					break;
				case '2' : 
					$this->ajouterSoustraction(); 
					array_push($this->operations, ($nb1 . ' - ' . $nb2)); 
					break;
				case '3' : 
					$this->ajouterMultiplication(); 
					array_push($this->operations, ($nb1 . ' * ' . $nb2)); 
					break;
				case '4' : 
					$this->ajouterDivision(); 
					array_push($this->operations, ($nb1 . ' / ' . $nb2)); 
				break;
			}					
		}
	}
	
	/* GET */
	public function getOperations() {
		return $this->operations;
	}	
	
	/* méthodes */	
	private function ajouterAddition() {		
		array_push($this->operators, '+');		
	}
	
	private function ajouterSoustraction() {		
		array_push($this->operators, '-');		
	}
	
	private function ajouterMultiplication() {	
		array_push($this->operators, '*');		
	}
	
	private function ajouterDivision() {
		array_push($this->operators, '/');		
	}
}
?>