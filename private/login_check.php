<?php

require_once dirname(__FILE__)."/../framework/helpers.php";

if (!empty($_POST)){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        // toto su data pre ulohu 4 zo 17.12
        $users =db_select(sprintf("SELECT * FROM Users WHERE email = '%s'", $_POST['email']) );
       
        if(!empty($users)){
            $user=$users[0];

            if($user->password == $_POST['password']){
            //email aj heslo suhlasia, ideme dalej
            $_SESSION["email"] = $_POST['email'];
            header('Location: index.php');
            }else{
                echo "Nesuhlasi heslo";
                $_POST['email']&&['password'];
              //echo "Nesuhlasi heslo"
            }
           
        }
        else{
            //"nenasiel sa pouzivatel"
            echo "neznamy pouzivatel";
           
        }
    }

};
?>
