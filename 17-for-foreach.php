<?php

  for ($contador = 0; $contador <= 10; $contador++):
    echo "8 x $contador = ".($contador*8)." <br>";
  endfor;

  echo"<hr>";

  //Percorrer Arrays
  $cores = array("Verde", "Vermelho", "Azul");
  foreach($cores as $valor):
    echo $valor."<br>";
  endforeach;  

  echo"<hr>";

  //Percorrer Arrays mostra o índice 
  $cores = array("Verde", "Vermelho", "Azul");
  foreach($cores as $indice => $valor):
    echo $indice."-".$valor."<br>";
  endforeach;  
?>