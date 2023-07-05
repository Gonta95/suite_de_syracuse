<?php
//********************************
// La conjecture de syracuse
//********************************


// I/ Explication
// **************

// La conjecture de syracuse est une suite de nombres particulière dans laquelle
// comme dans la plupart des suites on calcul un terme (nombre) en se basant sur le terme précédent (n).

// La particularité vient du calcul du nouveau terme :
// - si n est paire : n / 2
// - si n est impaire : 3 * n + 1


// IV/ Exercice
// ************

// Créez un programme  qui :

// - Demande un nombre n de départ à l'utilisateur
  

$n = readline('Choisir un nombre : ');

// Demande à l'utilisateur de saisir un nombre et stocke la valeur dans la variable $n.

while ($n != 1) {
  echo $n . ", ";
  // Affiche la valeur actuelle de $n suivie d'une virgule et d'un espace.

  if ($n % 2 == 0) {
    // Vérifie si $n est divisible par 2, c'est-à-dire s'il est pair.

    $n = $n/2;
    // Divise la valeur de $n par 2 et met à jour la valeur de $n avec le résultat.
  }
  else {
    $n = 3 * $n + 1;
    // Multiplie la valeur de $n par 3, ajoute 1 et met à jour la valeur de $n avec le résultat.
  }
}

echo $n ;
// Affiche la dernière valeur de $n (qui est égale à 1).




?>