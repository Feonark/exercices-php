<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c

$a = 11;
$b = 15;
$c = 10;

if ($a >= $b && $a >= $c) {
  echo $a;
} else if ($b >= $a && $b >= $c) {
  echo $b;
} else {
  echo $c;
}
