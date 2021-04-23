<html>
<body>

  <form action="dados.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Enviar"><br>
  </form>

  <!-- Enviar dados por LINK-->
  <a href="dados.php?idade=25&sobrenome=Santos">Enviar dados</a>

</body>
</html>