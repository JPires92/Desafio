<?php
    function get_data($name,$pass){

        $users=array(
            "joao"=>"password1234",
            //"joao"=>"joao1234"
        );
        
        //Verifica utilizador e password
        foreach($users as $user=>$psw){
            if($user==$name && $psw==$pass){
                return 1; //Se sucesso retorna 1
                break;
            }          
        }
       return 0; //Se não coincidirem os campos, retorna 0
    }
    
?>