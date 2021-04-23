<?php
// Operadores lógicos
// Nos permitem fazer comparação entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)  V se apenas 1 é verdadeiro
// negação (!)

$idade = 25;
$nome = "Rodrigo";

if(($idade == 26) and ($nome == "Rodrigo")):
  echo "É verdadeiro";
else:
  echo "É falso";
endif;

?>