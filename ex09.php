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

if (strrev($word) === $invertedWord) {
  echo 'Palindrome';
} else {
  echo 'Non';
}
