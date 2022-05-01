<?php
    //Identificamos o nosso header
    header("Content-Type:application/json");
    include("functions.php");

    //Verifica se os campos se encontram preenchidos
    if(!empty($_POST['user'] && $_POST['password'] )){
        
        $name = $_POST['user'];
        $password = $_POST ['password'];

        $resultado = get_data($name,$password); //Verifica dados inseridos
        
        //-1:Campos em falta; 0: erro na inserção de dados; 1:Sucesso na autenticação
        if($resultado==0)
            deliver_response($resultado, "Erro ao preencher os dados. Tente novamente!");
        else
            deliver_response($resultado, "Sucesso. Autenticado!");
        
    }else{
        deliver_response(-1, "Preencha todos os campos!");
    }
    
 function deliver_response($status, $status_message){
    header("HTTP/1.1 $status $status_message");
    
    $response['resultado']=$status;
    $response['mensagem']=$status_message;
    
    $json_response = json_encode($response);
    echo $json_response;
 
 }
?>