<?php

// Exercice 10 : Trouver la somme des chiffres d’un nombre.
// Pseudo-code :
// somme = 0
// tant que n > 0 faire
//   somme += n % 10
//   n = n // 10
// afficher somme

$sum = 0;
$n = 442;

echo 'La somme des chiffres de ' . $n;

while ($n > 0) {
  $sum += $n % 10;
  $n = intdiv($n, 10);
}

echo ' est : ' . $sum;
