<?php

// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'

$word = 'maison';
$invertedWord = 'nosiam';
$checkWord = '';

for ($i = strlen($word) - 1; $i >= 0; $i--) {
  $checkWord .= $word[$i];
}

if ($invertedWord === $checkWord) {
  echo 'Palindrome';
} else {
  echo 'Non';
}
