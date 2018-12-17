<?php

require_once dirname(__FILE__)."/../framework/helpers.php";

if (!empty($_POST)){
    if(!empty($_POST['email'] &&['password'])){
        // toto su data pre ulohu 4 zo 17.12
        $users =db_select(sprintf("SELECT * FROM Users WHERE email = '%s'", $_POST['email']) );
       
        if(!empty($users[0])){
            $user=b$users[0];
            if($user-> passowrd ==$_POST['password']){
                echo  $user->email;
            }else{
                //echo "Nesuhlasi heslo"
                echo $user->email;
            }else{
                //"nenasiel sa pouzivatel"

            }
        }
    
    }

};

$result=db_select(Select *from 'Users' );

?>
