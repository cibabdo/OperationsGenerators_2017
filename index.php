<?php
include_once 'OperationsGenerator.php';
include_once 'OperationSolver.php';
 
// création de l'objet de la classe OperationsGenerator
$generator = new OperationsGenerator();

// 12 est le nombre d’opérations voulue
$generator->genererOperations(12);

// afficher les opérations
$operations = $generator->getOperations();
echo 'Liste des opérations aléatoires:' . '<br>';
foreach ($operations as $op ) {
	echo $op . '<br>';
}

echo '<br>';

// exécuter les opérations
$tab_associatif = OperationSolver::solve($operations);
echo 'Résultat des opérations:' . '<br>';
foreach ($tab_associatif as $cle => $valeur ) {
	echo "'" . $cle . "'" . ' => ' . $valeur . '<br>';
}

echo '<br>';

// exécuter les opérations
$tab_associatif = OperationSolver::solve_map($operations);
echo 'Résultat des opérations (avec map):' . '<br>';
foreach ($tab_associatif as $cle => $valeur ) {
	echo "'" . $cle . "'" . ' => ' . $valeur . '<br>';
}
?>