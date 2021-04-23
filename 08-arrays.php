<?php
  //Arrays
  $carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
  $carros[] = "Amarok";
  $carros[10] = "Camaro";
  print_r($carros);
  echo "<br>";
  echo $carros[10];

  echo "<hr>";

  $motos = array();
  $motos[] = "Yamaha";
  $motos[] = "Honda";
  $motos[5] = "Suzuki";
  print_r($motos);
  echo "<br>";
  echo $motos[5];

  echo "<hr>";

  $clientes = ["Rodrigo", "Felipe", "Bia"];
  print_r($clientes);
  echo "<hr>";

  // Count
  $totalClientes =  count($clientes);
  echo $totalClientes;
  echo "<hr>";

  // Foreach
  foreach($carros as $valor) {
  echo $valor."<br>";
  }
  echo "<hr>";

  // Arrays Associativos
  $pessoa = array("nome"=> "Rodrigo", "idade"=> 23, "altura"=> 1.75);
  $pessoa["cidade"] = "Itabuna";
  //echo $pessoa["altura"];
  print_r($pessoa);
  echo "<br>";

  foreach ($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
  }
  echo "<hr>";

  // Arrays multidimensionais
  $times = array(
          "cariocas"=> array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
          "paulistas"=> array("campeao"=>"santos", "vice"=>"são paulo", "terceiro"=>"palmeiras"),
          "baianos"=> array("bahia", "vitória", "itabuna")
        );
  echo $times["baianos"][0];
  echo "<br>";
  
  foreach ($times["cariocas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
  }
  echo "<br>";

  foreach ($times["paulistas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
  }

?>