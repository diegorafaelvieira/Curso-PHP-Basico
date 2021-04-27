<?php
// COOKIE
setcookie('user', 'Diego Rafael Vieira', time()+3600); //3600 segundos
setcookie('email', 'diego@gmail.com', time()-3600); // Remove o cookie
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

//var_dump($_COOKIE);
echo $_COOKIE['ultima_pesquisa'];
?>