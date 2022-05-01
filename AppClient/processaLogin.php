<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Login</title>
</head>
<body>
<?php
  if ( ! empty( $_POST ) ) {
    $user=$_POST['user'];
    $pass=$_POST['password'];
    $params = "user=$user&password=$pass";
    
    //Utilização da biblioteca Client url para fazer pedido ao WS
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"http://localhost/Desafio/WS/index.php");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$params);

    //Recebe resposta do WS
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close ($ch);
    
    $obj = json_decode($server_output);
    
    $codResult=$obj->{'resultado'}; 
    $msg=$obj->{'mensagem'};
    
    if($codResult==1){
        echo "<script>alert('$msg');
                    location.href='\paginaInicial.php';
              </script>";
    }else{
        echo "<script>alert('$msg');
                   location.href='\index.php';
             </script>";
    }
  }  
?>
</body>
</html>