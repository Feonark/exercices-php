<?php

// Exercice 3 : Calculer la somme des nombres de 1 à 100.
// Pseudo-code :
// somme = 0
// pour i de 1 à 100 faire
//   somme += i
// afficher somme

$sum = 0;

for ($i = 1; $i < 101; $i++) {
  $sum += $i;
}

echo $sum;
