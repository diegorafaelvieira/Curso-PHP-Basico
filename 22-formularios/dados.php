<?php
  
  $nome = $_POST['nome'];
  $email = $_POST['email'];

  echo "Seu nome é $nome e seu email é $email <br>";

  var_dump($_POST);

  echo "<hr>";
  
  echo $_GET['idade']."<br>".$_GET['sobrenome'];
  var_dump($_GET);
?>
