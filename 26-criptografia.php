<?php

$senha = "123456";

$novaSenha = base64_encode($senha);
echo "base64:" .$novaSenha."<br>";
echo "Sua senha é:" .base64_decode($novaSenha);

echo "<hr>";

echo "Md5: " .md5($senha)."<br>";
echo "Sha1: " .sha1($senha);

echo "<hr>";

$senha = "123456";
$senha_db = '$2y$10$0EffRSkN0IQkaSMDN5zg/.t4mJ4OHLrOhORjsmjjoi7Z16hRE/dLK';

if (password_verify($senha, $senha_db)):
  echo "Senha válida";
else:
  echo "Senha inválida";
endif;

/*
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo $senhaSegura."<br>";
*/


?>