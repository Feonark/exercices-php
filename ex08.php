<?php

// Exercice 8 : Inverser une chaîne de caractères.
// Pseudo-code :
// pour i de longueur-1 à 0 faire
//   concaténer caractère à une nouvelle chaîne
// afficher la nouvelle chaîne

$name = 'Hugo';
$invertedName = '';

for ($i = strlen($name) - 1; $i >= 0; $i--) {
  $invertedName .= $name[$i];
}

echo $invertedName;
