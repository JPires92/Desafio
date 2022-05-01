<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilos.css">

    <title>Login</title>
</head>

<body>
<br><br><br>
<div align="center"><img src="challengeApp.png" alt="Desafio" height="30%" width="30%" align="center"></div>
<br>
<h2 align="center">Aplica&ccedil;&atilde;o Login</h2>
<!--Botão Login-->
<p align="center"><button onclick="document.getElementById('id01').style.display='block'" style="width:300px;" class="buttonLog">Entrar</button></p>

<!--Login-->
<div id="id01" class="modal">
  <form class="modal-content"  method="post" action="processaLogin.php"  style="width: 40%"> 
    <div class="imgcontainer">
      <!--Texto botão fechar janela-->
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Fechar janela">&times;</span>
      <!--Logo-->
      <img src="challengeApp.png" height="20%" width="20%" alt="Desafio" >
    </div>

    <div class="container">
      <label for="user"><b>Utilizador</b></label>
      <input type="text" placeholder="Insira o nome de utilizador" name="user" id="user" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Insira a password" name="password" id="password" required>

      <p align="center"><button type="submit" style="width:300px;" id="login_submit"  class="buttonLog">Entrar</button></p>
    </div>
  </form>
</div>

<script>
    // Obter janela de login
    var modal = document.getElementById('id01');

    //Quando o utilizador clica fora da janela, esta é fechada
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
  );
</script>
</body>
</html>